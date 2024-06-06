# sourcetracker
Track and analyze the sources of user registrations and sign-ups

This is an [extension for CiviCRM](https://docs.civicrm.org/sysadmin/en/latest/customize/extensions/), licensed under [AGPL-3.0](LICENSE.txt).

## Getting Started

1. Download the extension: [Download ZIP](https://github.com/pokhiii/sourcetracker/archive/refs/heads/main.zip)
1. Extract the zip file and rename it from `sourcetracker-main` to simply `sourcetracker`
    - Move the extension (unzipped) to your CiviCRM extension directory. Eg. in WordPress it is will be `path/to/wordpress/wp-content/uploads/civicrm/ext`
2. Install the extension
    - Navigate to the **Administer** > **System Setting** > **Extension**
    - Find **Source Tracker** in extension and install it (Refresh the page if you can't see the source tracker extension)
3. Create a custom field named `Source`
    - Navigate To the **Administer** > **Customize Data and Screen** > **Custom Field**
    - Click on **Add Set of Custom Fields**
    - Create a custom field named `Source` (the name should be the same & case-sensitive) and mark **hidden** on Field Input Type
	
4. Use this field in any Profile
   - Include this field in any Profile (as type hidden)
   - Use the Profile for registrations. Eg. in WordPress it is equivalent to using the shortcode on a WordPress page.
   - Add the UTM parameter at the end of the registration form page URL. ( like  `?utm_source=whatsapp` )
   - Submit the registration form
   - Navigate to the **Search** > **Find contacts**
   - Click on the contract you registered; you will see the source field at the bottom of the detail form

## Known Issues

No issues reported yet.
