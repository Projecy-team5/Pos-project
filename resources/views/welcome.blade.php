@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="space-y-8">
                    <!-- Stats grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white/80 rounded-xl p-6 shadow-sm border border-slate-200/60">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-sm font-medium text-slate-600">Total Projects</h3>
                                    <p class="text-2xl font-bold text-slate-900">24</p>
                                    <p class="text-xs text-emerald-600">+12% from last month</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white/80 rounded-xl p-6 shadow-sm border border-slate-200/60">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-emerald-50 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-sm font-medium text-slate-600">Active Tasks</h3>
                                    <p class="text-2xl font-bold text-slate-900">148</p>
                                    <p class="text-xs text-emerald-600">+8% from last week</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white/80 rounded-xl p-6 shadow-sm border border-slate-200/60">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-purple-50 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-sm font-medium text-slate-600">Team Members</h3>
                                    <p class="text-2xl font-bold text-slate-900">32</p>
                                    <p class="text-xs text-emerald-600">2 new this week</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white/80 rounded-xl p-6 shadow-sm border border-slate-200/60">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-amber-50 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-sm font-medium text-slate-600">Completion Rate</h3>
                                    <p class="text-2xl font-bold text-slate-900">92%</p>
                                    <p class="text-xs text-emerald-600">+5% from last month</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent activity -->
                    <div class="bg-white/80 rounded-xl p-6 shadow-sm border border-slate-200/60">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-semibold text-slate-900">Recent Activity</h3>
                            <button class="text-sm text-slate-600 hover:text-slate-900">View all</button>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4 p-3 bg-slate-50/50 rounded-lg">
                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-slate-900">New project "Website Redesign" created</p>
                                    <p class="text-xs text-slate-600">2 hours ago</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4 p-3 bg-slate-50/50 rounded-lg">
                                <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-slate-900">Task "Update documentation" completed</p>
                                    <p class="text-xs text-slate-600">4 hours ago</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4 p-3 bg-slate-50/50 rounded-lg">
                                <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-slate-900">3 new team members joined</p>
                                    <p class="text-xs text-slate-600">1 day ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
