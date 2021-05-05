<?php

// IMPORTANT NOTE: in a production application, the partner ID and Kaltura Admin Secret should never
// be exposed on the client side of an application. It is done here for simplicity only.

// https://kmc.kaltura.com/index.php/kmcng/settings/integrationSettings
define('PARTNER_ID', INSERT_PROPER_VALUE);

// https://kmc.kaltura.com/index.php/kmcng/settings/integrationSettings
define('API_ADMIN_SECRET', 'INSERT_PROPER_VALUE');

// Make sure this is set to real user IDs so that Analytics and Entitlements will really be tracked according to business needs
define('ADMIN_USER_ID',     'admin@webcaster.com');
define('PRESENTER_USER_ID', 'presenter@webcaster.com');
define('VIEWER_USER_ID',    'viewer@webcaster.com');
define('RESOURCE_ID', INSERT_PROPER_VALUE);
define('V7_PLAYER_UI_CONF', INSERT_PROPER_VALUE);
define('LIVESTREAM_ENTRY_ID', '');

// Set KS expiry to one day
define('KS_EXPIRY', 60*60*24);

?>
