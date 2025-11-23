<?php

namespace App\Traits;

use App\Models\ActionLog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

trait Loggable
{
    /**
     * Log an action to database and file log
     */
    protected function logAction(
        string $action,
        ?Model $model = null,
        string $description = '',
        ?array $oldValues = null,
        ?array $newValues = null
    ): void {
        $user = Auth::user();
        $request = request();

        // Prepare log data
        $logData = [
            'user_id' => $user?->id,
            'action' => $action,
            'model_type' => $model ? get_class($model) : null,
            'model_id' => $model?->id,
            'description' => $description ?: $this->generateDescription($action, $model),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'old_values' => $oldValues,
            'new_values' => $newValues,
        ];

        // Save to database
        try {
            ActionLog::create($logData);
        } catch (\Exception $e) {
            // If database logging fails, still log to file
            Log::error('Failed to save action log to database: ' . $e->getMessage(), $logData);
        }

        // Also log to file for backup/audit trail
        $logMessage = sprintf(
            '[ACTION LOG] User: %s (%s) | Action: %s | Model: %s #%s | Description: %s | IP: %s',
            $user?->name ?? 'Guest',
            $user?->email ?? 'N/A',
            $action,
            $logData['model_type'] ?? 'N/A',
            $logData['model_id'] ?? 'N/A',
            $logData['description'],
            $logData['ip_address']
        );

        Log::channel('daily')->info($logMessage, [
            'old_values' => $oldValues,
            'new_values' => $newValues,
        ]);
    }

    /**
     * Generate description based on action and model
     */
    protected function generateDescription(string $action, ?Model $model = null): string
    {
        $modelName = $model ? class_basename($model) : 'Unknown';

        return match ($action) {
            'create' => "Membuat {$modelName} baru",
            'update' => "Memperbarui {$modelName}",
            'delete' => "Menghapus {$modelName}",
            'view' => "Melihat {$modelName}",
            'login' => "Login ke sistem",
            'logout' => "Logout dari sistem",
            'download' => "Mengunduh {$modelName}",
            'upload' => "Mengunggah {$modelName}",
            default => "Melakukan aksi {$action} pada {$modelName}",
        };
    }

    /**
     * Get changed values for update action
     */
    protected function getChangedValues(Model $model, array $newData): array
    {
        $oldValues = [];
        $newValues = [];

        foreach ($newData as $key => $value) {
            if ($model->isDirty($key)) {
                $oldValues[$key] = $model->getOriginal($key);
                $newValues[$key] = $value;
            }
        }

        return [
            'old' => $oldValues,
            'new' => $newValues,
        ];
    }
}

