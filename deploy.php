<?php

namespace Deployer;
require 'recipe/common.php';


set('repository','https://github.com/NielHovo/wpaaron_niels_simon');


// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);


// Shared files/dirs between deploys
set('shared_files', ['public/wp-config.php', 'public/.htaccess']);
set('shared_dirs', ['public/wp-content/uploads']);


// Writable dirs by web server
// set('writable_mode', 'chown');
// set('writable_dirs', ['public/wp-content/uploads']);
set('allow_anonymous_stats', false);


// Hosts
host('vm-orange.multimediatechnology.at')
        ->set('remote_user', 'admin')
        ->set('port', 5412)
        ->set('deploy_path', '/home/admin/aaron');


// Composer
set('composer_action', false);


// Tasks
desc('Deploy your project');
task('deploy', [
    'deploy:prepare',
    'deploy:publish'
]);

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
