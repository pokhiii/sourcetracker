# sourcetracker
Track and analyze the sources of user registrations and sign-ups

This is an [extension for CiviCRM](https://docs.civicrm.org/sysadmin/en/latest/customize/extensions/), licensed under [AGPL-3.0](LICENSE.txt).

## Getting Started

1. Download the extension in zip file
    - Extract the zip file and named as sourcetracker
    - Changed the directory of file to civicrm\wp-content\uploads\civicrm\ext
2. Install the extension
    - Navigate to the **Administer** > **System Setting** > **Extension**
    - Find **Source Tracker** in extension and install it (Refresh the page if you can't see the source tracker extension)
3. Create a custom field named `Source`
    - Navigate To the **Administer** > **Customize Data and Screen** > **Custom Field**
    - Click on **Add Set of Custom Fields**
    - Create custom field named `Source` (the name should be exactly same & case-sensitive) and mark **hidden** on Field Input Type *	
	
4. Use this field in any Profile
   - Include this field in any Profile (as type hidden)
   - Use the profile in the registration form
   - Add the UTM parameter at the end of the registration form page URL. ( like  `?utm_source=whatsapp` )
   - Submit the registration form
   - Navigate to the **Search** > **Find contacts**
   - Click on the contract you registered; you will see the source field at the bottom of the detail form

## Known Issues

No issues reported yet.
