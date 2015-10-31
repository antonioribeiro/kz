@include('notifications.index', [
    'title' => 'Acesso <strong>Restrito</strong>',
    'message' => 'Você não tem permissões suficientes para acessar esta área.',
    'buttons' => [[
       'caption' => t('captions.back'),
       'url' => route('home')
    ]],
])



