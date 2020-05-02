<?php

return [
 'editor'                       => env('IGNITION_EDITOR', 'vscode'),
 'theme'                        => env('IGNITION_THEME', 'dark'),
 'enable_share_button'          => env('IGNITION_SHARING_ENABLED', true),
 'register_commands'            => env('REGISTER_IGNITION_COMMANDS', false),
 'ignored_solution_providers'   => [
  \Facade\Ignition\SolutionProviders\MissingPackageSolutionProvider::class,
 ],
 'enable_runnable_solutions'    => env('IGNITION_ENABLE_RUNNABLE_SOLUTIONS', null),
 'remote_sites_path'            => env('IGNITION_REMOTE_SITES_PATH', ''),
 'local_sites_path'             => env('IGNITION_LOCAL_SITES_PATH', ''),
 'housekeeping_endpoint_prefix' => '_ignition',
];