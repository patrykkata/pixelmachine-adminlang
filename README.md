# Pixel Machine - AdminLocale
Magento Adminhtml User Language Selector

This module allows you to define a custom admin locale (interface language) for every admin user.
Very useful for multi-national store administration teams, where individual admins _will no longer have
to switch to their preferred language every time they log in_ to Magento backend.

# installation
Copy this module's files to your Magento installation root, merge with your existing "app" folder, clear cache
(this module contains an installer, don't forget to clear the cache!).

# usage
This module will create a new tab in the Admin User Edit page, named "Admin Locale". There, you can define the language
that should automatically be applied for a user after he logs in.

1. Set the language in System -> Permissions -> Users -> [Your User], "Admin Locale" tab.
2. Save the user.
3. Log out from Magento.
4. Log in back to magento using your just-edited username.
5. [the language will be set according to your preferences]. All done.
