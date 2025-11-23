<?php

namespace App\Http\Controllers;

use App\Models\ActionLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActionLogController extends Controller
{
    /**
     * Display a listing of action logs.
     */
    public function index(Request $request)
    {
        // Hanya super admin yang bisa melihat logs
        if (!Auth::user()->isSuperAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        $query = ActionLog::with('user')->orderBy('created_at', 'desc');

        // Filter by action
        if ($request->has('action') && $request->action) {
            $query->where('action', $request->action);
        }

        // Filter by model type
        if ($request->has('model_type') && $request->model_type) {
            $query->where('model_type', $request->model_type);
        }

        // Filter by user
        if ($request->has('user_id') && $request->user_id) {
            $query->where('user_id', $request->user_id);
        }

        // Filter by date range
        if ($request->has('date_from') && $request->date_from) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }

        if ($request->has('date_to') && $request->date_to) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        // Search by description
        if ($request->has('search') && $request->search) {
            $query->where('description', 'like', '%' . $request->search . '%');
        }

        $logs = $query->paginate(50)->withQueryString();

        // Get filter options
        $actions = ActionLog::distinct()->pluck('action')->sort();
        $modelTypes = ActionLog::distinct()->whereNotNull('model_type')->pluck('model_type')->sort();
        $users = \App\Models\User::whereIn('id', ActionLog::distinct()->whereNotNull('user_id')->pluck('user_id'))->get();

        return view('profile.backend.action-logs.index', [
            'logs' => $logs,
            'actions' => $actions,
            'modelTypes' => $modelTypes,
            'users' => $users,
            'filters' => $request->only(['action', 'model_type', 'user_id', 'date_from', 'date_to', 'search']),
        ]);
    }

    /**
     * Display the specified action log.
     */
    public function show(ActionLog $actionLog)
    {
        // Hanya super admin yang bisa melihat logs
        if (!Auth::user()->isSuperAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        $actionLog->load('user');

        return view('profile.backend.action-logs.show', [
            'log' => $actionLog,
        ]);
    }
}

