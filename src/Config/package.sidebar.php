<?php

return [
  'dashboard' => [
    'name'          => 'Dashboard',
    'icon'          => 'fa-crosshairs',
    'route_segment' => 'dashboard',
    'route'         => 'dashboard.home',
    'permission'    => 'dashboard.view',
    'entries' => [
      [
        'name'          => 'Home',
        'icon'          => 'fa-crosshairs',
        'route_segment' => 'dashboard',
        'route'         => 'dashboard.home',
      ],
      [
        'name'          => 'Knowledge Base',
        'icon'          => 'fa-graduation-cap',
        'route_segment' => 'dashboard',
        'route'         => 'dashboard.kb',
      ],
    ]
  ],
];
