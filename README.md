# kme-to-webcast

This app highlights how one broadcast the contents of a Kaltura Meetings Experience (KME) room to a large audience.

## Prerequisites

- Kaltura account configured with both KAF and KME modules enabled
- PHP and Apache installed on development machine
- Download and unzip the [PHP Kaltura Client Library](https://github.com/kaltura/KalturaGeneratedAPIClientsPHP/archive/v16.14.0.tar.gz). Rename the folder to KalturaClient and move it into the repository root folder.
- Copy AppSettings.php.template to AppSettings.php and replace the occurences of "INSERT_PROPER_VALUE" with the proper values.

## Key Features

- Creating a Kaltura LiveStream Entry, which houses the webcast
- Launch into a KME room
- Start broadcasting the webcast into the Kaltura LiveStream Entry
- View the webcast in a Kaltura Player
