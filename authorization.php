<?php

require_once 'phpgen_settings.php';
require_once 'components/security/security_info.php';
require_once 'components/security/datasource_security_info.php';
require_once 'components/security/tablebased_auth.php';
require_once 'components/security/user_grants_manager.php';
require_once 'components/security/table_based_user_grants_manager.php';

require_once 'database_engine/mysql_engine.php';

$grants = array('guest' => 
        array()
    ,
    'defaultUser' => 
        array('milestones' => new DataSourceSecurityInfo(false, false, false, false),
        'projects' => new DataSourceSecurityInfo(false, false, false, false),
        'tasks' => new DataSourceSecurityInfo(false, false, false, false),
        'users' => new DataSourceSecurityInfo(false, false, false, false))
    ,
    'guest' => 
        array('milestones' => new DataSourceSecurityInfo(false, false, false, false),
        'projects' => new DataSourceSecurityInfo(false, false, false, false),
        'tasks' => new DataSourceSecurityInfo(false, false, false, false),
        'users' => new DataSourceSecurityInfo(false, false, false, false))
    );

$appGrants = array('guest' => new DataSourceSecurityInfo(false, false, false, false),
    'defaultUser' => new DataSourceSecurityInfo(true, false, false, false),
    'guest' => new DataSourceSecurityInfo(false, false, false, false));

$dataSourceRecordPermissions = array();

$tableCaptions = array('milestones' => 'Milestones',
'projects' => 'Projects',
'tasks' => 'Tasks',
'users' => 'Users');

function CreateTableBasedGrantsManager()
{
    return null;
}

function SetUpUserAuthorization()
{
    global $grants;
    global $appGrants;
    global $dataSourceRecordPermissions;
    $hardCodedGrantsManager = new HardCodedUserGrantsManager($grants, $appGrants);
    $tableBasedGrantsManager = CreateTableBasedGrantsManager();
    $grantsManager = new CompositeGrantsManager();
    $grantsManager->AddGrantsManager($hardCodedGrantsManager);
    if (!is_null($tableBasedGrantsManager)) {
        $grantsManager->AddGrantsManager($tableBasedGrantsManager);
        GetApplication()->SetUserManager($tableBasedGrantsManager);
    }
    $userAuthorizationStrategy = new TableBasedUserAuthorization(new MyPDOConnectionFactory(), GetGlobalConnectionOptions(), 'users', 'username', 'id', $grantsManager);
    GetApplication()->SetUserAuthorizationStrategy($userAuthorizationStrategy);

    GetApplication()->SetDataSourceRecordPermissionRetrieveStrategy(
        new HardCodedDataSourceRecordPermissionRetrieveStrategy($dataSourceRecordPermissions));
}

function GetIdentityCheckStrategy()
{
    return new TableBasedIdentityCheckStrategy(new MyPDOConnectionFactory(), GetGlobalConnectionOptions(), 'users', 'username', 'password', '');
}

function CanUserChangeOwnPassword()
{
    return false;
}

?>