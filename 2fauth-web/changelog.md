# Change log

## [4.2.3] - 2023-09-26

### Fixed

- [issue #232](https://github.com/Bubka/2FAuth/issues/232) Vendor.js throws error making frontend unusable
- [issue #233](https://github.com/Bubka/2FAuth/issues/233) The Close button of the 404 error page loops the page on itself

## [4.2.2] - 2023-09-17

### Fixed

- [issue #232](https://github.com/Bubka/2FAuth/issues/232) Vendor.js throws error making frontend unusable

## [4.2.1] - 2023-09-14

### Fixed

- [issue #227](https://github.com/Bubka/2FAuth/issues/227) PAT and Webauthn registration broken

## [4.2.0] - 2023-09-13

### Added

- An Only for the brave feature: ctrl + click a TOTP account from the main view automatically generates a password and copies it to the clipboard without displaying it at all. Will the password be valid at the time you paste it? Nobody knows 💀
- The `MAIL_VERIFY_SSL_PEER` environment variable to disable SSL peers verification ([#219](https://github.com/Bubka/2FAuth/issues/219)).
- Russian translation, but partial. Want to help complete this translation? ➡️ [2FAuth project on Crowdin](https://crowdin.com/project/2fauth).

### Changed

- Navigation with the __Back__ and __Close__ buttons is now fully consistent with their labeling, even when browsing back through successive views using those buttons.
- The length of the email submitted during registration is now limited to 191 characters ([#214](https://github.com/Bubka/2FAuth/issues/214)).
- Upgrade to Laravel 10

### Fixed

- [issue #213](https://github.com/Bubka/2FAuth/issues/213) `checkForUpdate` value is missing in the About view
- Inconsistent page titles

---

**Full Changelog**: [v4.1.0...v4.2.0](https://github.com/Bubka/2FAuth/compare/v4.1.0...v4.2.0)

## [4.1.0] - 2023-07-07

This new version introduces a very common feature in the 2FA app world, the automatic generation and display of passwords.

Since the very beginning, 2FAuth offers an _Open, Click & Get one password_ behavior, this is one of the main reasons why I created it. But this can be very troublesome or frustrating for users migrating from other 2FA apps as almost all of them work with an _Open & Get passwords_ behavior, which is much more straightforward.

So this is now only a user choice as 2FAuth offers both behaviors via a user preference. Obvisouly, the _Open, Click & Get one password_ behavior remains the default one.

### Added

- A user preference to generate and show 2FA passwords on the main view without user interaction ([#153](https://github.com/Bubka/2FAuth/issues/153))
- An administrator setting to disable user registration ([#170](https://github.com/Bubka/2FAuth/issues/170))
- A `2fauth:install` Artisan command to ease both initial and upgrade installation.
- A spinner, during 2FA password loading - By [@josh-gaby](https://github.com/josh-gaby).
- Russian translation, but partial. Want to help complete this translation? ➡️ [2FAuth project on Crowdin](https://crowdin.com/project/2fauth).

### Changed

- Aegis migrations with empty `name` properties are no longer rejected. The `issuer` property is then used as a fallback value.
- The Docker image now embed the MySQL/MariaDB PHP extension, so it may be ready to work with.

### Fixed

- [issue #180](https://github.com/Bubka/2FAuth/issues/180) OTP does not rotate while _Close after copy_ and _Copy on display_ is activated - By [@josh-gaby](https://github.com/josh-gaby)
- [issue #194](https://github.com/Bubka/2FAuth/issues/194) Container keeps trying to make connection to 172.67.161.186
- [issue #134](https://github.com/Bubka/2FAuth/issues/134), [#143](https://github.com/Bubka/2FAuth/issues/143), [#147](https://github.com/Bubka/2FAuth/issues/147) Issue with some Microsoft 2FA
- [issue #196](https://github.com/Bubka/2FAuth/issues/196) ERROR The [public/storage] link already exists

## [4.0.3] - 2023-06-30

### Security release

- Fix possible SQL injection in validation rule (thx [@YouGina](https://github.com/YouGina))
- Fix various possible XSS injections (thx [@quirinziessler](https://github.com/quirinziessler))

## [4.0.2] - 2023-04-19

### Fixed

- [issue #176](https://github.com/Bubka/2FAuth/issues/176) Lost keys when upgrading to 4.x whilst using proxy header authentication

## [4.0.1] - 2023-04-16

### Fixed

- [issue #174](https://github.com/Bubka/2FAuth/issues/174) PHP Fatal error after latest Update

## [4.0.0] - 2023-04-14

Time for multi-user has arrived, here comes v4.0!

This is a first step mainly dedicated to internal changes, so the feature has been integrated gently. For now, almost nothing has changed around user management, except that registrations are opened to new users and some options are only available to the administrator.

This version also comes with nice additions. A light theme, an export feature or the support of custom base url just to name a few.

⚠️ This release drops PHP 8.0 support ⚠️

### Added

- An Export feature (accessible via the _Manage_ view) that lets you download your 2FA data in a JSON migration file
- The Import feature accepts the 2FAuth JSON file generated by the Export feature
- Support of custom base URL. You can now install 2FAuth in a domain sub-directory, e.g `https://mydomain/2fauth/` (see [Docs](https://docs.2fauth.app/getting-started/installation/self-hosted-server//#subdirectory))
- ctrl+F keyboard shortcut to focus on Search on the main view
- A light theme
- IP addresses of failed login attempts are now logged

### Changed

⚠️ 2FAuth uses a new component to operate the WebAuthn authentication that cannot use existing registrations of your security devices. As a consequence, all your security devices will be revoked and the "Use Webauthn only" option will be disabled during the upgrade to avoid any issue and/or lockout. You will have to sign in using your email and password to re-register you security devices.

- The _Manage_ view layout has been rearranged: The search bar remains and the action buttons now stand in the page footer
- Password formatting is now a user option available with 3 formats: Grouping digits by pair, by trio or by half
- Failed login throttling and API calls throttling can be configured in the .env file
- Logs give more information
- Upgrade to Laravel 9.0

### Removed

- The ability to set a Secret in a plain text format (in the advanced form). This was confusing and without any benefit.

### Fixed

- [issue #166](https://github.com/Bubka/2FAuth/issues/166) Unable to register Nitrokey

## [3.4.2] - 2023-01-25

### Fixed

- [issue #160](https://github.com/Bubka/2FAuth/issues/160) Steam otpauth URI from Aegis are rejected by the Import feature

## [3.4.1] - 2022-11-25

### Fixed

- [issue #140](https://github.com/Bubka/2FAuth/issues/140) Bad regex for Period field (advanced form)
- [issue #141](https://github.com/Bubka/2FAuth/issues/141) Digits field is missing in advanced form

## [3.4.0] - 2022-10-20

This release is a big step towards more accessibility. Keyboard navigation is now fully supported, with clean and consistent focus, and several UI components have received relevant ARIA properties to support assistive technologies.

It also provides a rewritten Import feature that supports new export formats (Aegis and 2FAS Authenticators) and more to come.

⚠️ This release should be the last that supports PHP 8.0

### Added

- An option to check for new release on Github ([#127](https://github.com/Bubka/2FAuth/issues/127))
- An option to automatically copy One-Time Passwords when they are displayed ([#125](https://github.com/Bubka/2FAuth/issues/125))
- [Aegis](https://github.com/beemdevelopment/Aegis) and [2FAS](https://2fas.com/) export formats are now supported by the Import feature ([#128](https://github.com/Bubka/2FAuth/issues/128))
- (Partial) Spanish and Chinese (simplified) localizations

### Changed

- Password fields can reveal the password and inform about the password strength ([#124](https://github.com/Bubka/2FAuth/issues/124))

### Fixed

- [issue #126](https://github.com/Bubka/2FAuth/issues/126) HOTP counters are not updated after OTP generation
- Autolock setup ignored when session lifetime was shorter, causing CSRF token mismatch errors

## [3.3.3] - 2022-08-16

### Fixed

- [issue #110](https://github.com/Bubka/2FAuth/issues/110) Can't sign in with login/password after the removal of the last webauthn device
- [issue #111](https://github.com/Bubka/2FAuth/issues/111) Inappropriate notification about existing user during registration
- [issue #113](https://github.com/Bubka/2FAuth/issues/113) Password reset does not work
- [issue #115](https://github.com/Bubka/2FAuth/issues/115) WEBAUTHN_NAME .env variable set as null generates server error

## [3.3.1-3.3.2] - 2022-08-02

### Fixed

- [issue #109](https://github.com/Bubka/2FAuth/issues/109) Timeout right after login

## [3.3] - 2022-08-01

⚠️ This release drops PHP 7.4 support ⚠️

The [docker image](https://hub.docker.com/r/2fauth/2fauth) has been upgraded as well.

### Added

- An option to fetch icons automatically from [2factorauth/twofactorauth](https://github.com/2factorauth/twofactorauth) ([#99](https://github.com/Bubka/2FAuth/issues/99))
- An _About_ page, accessible from the footer ([#91](https://github.com/Bubka/2FAuth/issues/91))
- Alphabetical sorting feature ([#95](https://github.com/Bubka/2FAuth/issues/95))

### Changed

- The footer is now visible everywhere to ease access to the _About_ page

### Fixed

- [issue #89](https://github.com/Bubka/2FAuth/issues/89) Deploy to Heroku fails without `composer.lock`
- [issue #102](https://github.com/Bubka/2FAuth/issues/102) OTP generation from the Create/Edit form with invalid data should display errors
- [issue #103](https://github.com/Bubka/2FAuth/issues/103) Google Authenticator import error: "Label contains a colon"
- [issue #109](https://github.com/Bubka/2FAuth/issues/109) Account creation/import fails when encryption is On

### Removed

- PHP 7.4 support

## [3.2] - 2022-07-18

### Added

- Support of Google Authenticator migration data: QR codes generated by the G-Auth export feature can be flashed/uploaded to import their data into 2FAuth. ([Import doc](https://docs.2fauth.app/usage/import), [#74](https://github.com/Bubka/2FAuth/issues/74))
- Partial support of STEAM TOTP. See the [Steam Guard doc](https://docs.2fauth.app/usage/steam-guard) for detailed informations about this support ([#30](https://github.com/Bubka/2FAuth/issues/30))

### Changed

- Pages now have a unique title
- Signing in while already authenticated no longer display the "_Already authenticated_" error message ([#88](https://github.com/Bubka/2FAuth/issues/88))
- The Auto lock feature now forwards to a dedicated page to ensure proper logout and prevent CSRF token mismatch error (see [issue #73](https://github.com/Bubka/2FAuth/issues/73)) that still occurred in certain situation

### Fixed

- [issue #90](https://github.com/Bubka/2FAuth/issues/90) Empty page after deletion of all accounts
- [issue #97](https://github.com/Bubka/2FAuth/issues/97) Secret's format selector should not clear the locked field in edit form

## [3.1.1] - 2022-05-31

### Fixed

- [issue #85](https://github.com/Bubka/2FAuth/issues/57), [issue #86](https://github.com/Bubka/2FAuth/issues/86) Invalid OTP generated after the 2FA account has been saved to db

## [3.1.0] - 2022-05-20

### Added

- `PROXY_LOGOUT_URL` environment variable to specify a custom logout url when using an auth proxy
- Locked/Unlocked state for the _Secret_ field in the 2FA account Edit form to prevent undesirable edit.

### Fixed

- Fix OAuth setting view returning an error when auth is handled by a proxy
- [issue #57](https://github.com/Bubka/2FAuth/issues/57) Can't save icons or upload QR codes - Docker installation
- [issue #81](https://github.com/Bubka/2FAuth/issues/81) Unable to create configured logger. Using emergency logger
- [issue #82](https://github.com/Bubka/2FAuth/issues/82) Autolock feature should be disabled while auth is handled by a proxy
- [issue #84](https://github.com/Bubka/2FAuth/issues/84) Reverse-proxy-guard authenticates request without valid headers configuration

## [3.0.2] - 2022-05-14

### Added

- Mail settings section in the docker readme by [@aronmal](https://github.com/aronmal)

### Fixed

- [issue #72](https://github.com/Bubka/2FAuth/issues/72) 2FA secret passed as plain text rejected by form validation
- [issue #73](https://github.com/Bubka/2FAuth/issues/73) CSRF token mismatch
- [issue #78](https://github.com/Bubka/2FAuth/issues/78) Add tags other then latest when pushing images to dockerhub

## [3.0.1] - 2022-05-11

### Fixed

- [issue #68](https://github.com/Bubka/2FAuth/issues/68) 2fauth not run after update
- [issue #71](https://github.com/Bubka/2FAuth/issues/71) Cannot view old TOTP entries on latest Docker Image
- Missing login information on the demo website

## [3.0.0] - 2022-05-09

Finally, here is version 3.0!

This is a milestone in the 2FAuth development that greatly enhances 2FAuth under the hoods and comes with a [brand new documentation](https://docs.2fauth.app/).

### New

- 2FAuth now exposes a REST API following the OpenAPI 3.1 specification that allows connexion with third parties (see the [API doc](https://docs.2fauth.app/api/))
- Support of the _Web Authentication_ standard, aka WebAuthn, to login using a security device like a Yubikey or FaceID
- Support of authentication proxy to bypass the 2FAuth auth login
- Heroku setup to deploy 2FAuth using the _Deploy to Heroku_ button

#### Also added

- Ability to delete the user account and reset 2FAuth
- The content of any non-2FA QR code can be copied or followed (in case of an HTTP link)
- PHP 8.0 support

### Changed

- 2Fauth now uses the browser language preference by default.
- The current group is now clickable in the group selector
- Upgrade to Laravel 8

### Fixed

- [issue #45](https://github.com/Bubka/2FAuth/issues/45) Account or Service field containing colon breaks the Test feature in the advanced form
- [issue #47](https://github.com/Bubka/2FAuth/issues/47) Account creation fails when otpauth service parameter is missing
- [issue #50](https://github.com/Bubka/2FAuth/issues/50) Email password reset does not work
- [issue #51](https://github.com/Bubka/2FAuth/issues/51) Cannot delete a group with accounts (MySQL only)
- [issue #52](https://github.com/Bubka/2FAuth/issues/52) null "Default group" setting after group delete
- [issue #57](https://github.com/Bubka/2FAuth/issues/57) Can't save icons or upload QR codes - Docker installation

### Removed

- PHP 7.3 support

## [2.1.0] - 2021-03-04

### Added

- German translation, thanks to [@chenmichael](https://crowdin.com/profile/chenmichael)

## [2.0.2] - 2020-12-04

### Fixed

- [issue #20](https://github.com/Bubka/2FAuth/issues/20) Issues using 'Protect sensible data'

## [2.0.1] - 2020-12-03

### Fixed

- [issue #18](https://github.com/Bubka/2FAuth/issues/18) Install using MySQL causes exception
- [issue #17](https://github.com/Bubka/2FAuth/issues/17) Capitalization of email address during login should not matter
- [issue #15](https://github.com/Bubka/2FAuth/issues/15) Applied group filter is not removed if the group is deleted
- [issue #14](https://github.com/Bubka/2FAuth/issues/14) Cache is not refreshed automatically after group changes
- Missing footer links at first start
- Missing redirection after registration

## [2.0.0] - 2020-11-29

2FAuth goes to v2.0!

This release comes with multiple improvements and a lot of changes under the hood.
Don't forget to backup your database before you upgrade. Have fun :)

### Added

- Add Groups to enhance accounts management
- New advanced form to define fully customized accounts without QR code
- New user option to skip the submitting page
- New DB protection option to encrypt sensitive 2FA data
- QR code generation of recorded accounts
- Support of the OTP `image` parameter when a QR code is imported

### Changed

- Performance improvement thanks to data caching
- Show Register/Login forms and their links only when relevant
- Let the user choose between all available submitting methods (livescan, qrcode upload, advanced form)
- Translations are now managed on [Crowdin.com/2fauth](https://crowdin.com/project/2fauth). You master some foreign languages? Why not help translate 2FAuth, your help would be welcome.

### Fixed

- [issue #13](https://github.com/Bubka/2FAuth/issues/13) Long Service name push content out of viewport
- [issue #11](https://github.com/Bubka/2FAuth/issues/11) Token generation do not loop if TOTP period is different from 30s
- [issue #9](https://github.com/Bubka/2FAuth/issues/9) Upload QR code in standard form return a 422 missing uri field

## [1.3.1] - 2020-10-12

### Changed

- Upgrade to Laravel 7.0
- Drop PHP 7.2 support
- Enable the Request reset password form in Demo mode but inactivated

### Fixed

- Fix missing notifications in Auth views

## [1.3.0] - 2020-10-09

### Added

- Application lock on security code copy or after a fixed period of inactivity
- Notify user that https is required in order to use camera streaming to flash QR code
- Notify user that the security code has been copied to clipboard when user click it
- Show selected accounts count in Manage view
- New option to show/hide icons in accounts list

### Changed

- More mobile friendly Close button for modal
- More advanced notification component
- Fixed header to keep Search field and Delete button always visible
- Switches replaced by checkboxes in Settings

### Fixed

- Hide context around iPhone X+ notch
- Unwanted access to restricted pages as guest

## [1.2.0] - 2020-09-18

### Added

- QR Code scan using live stream when a camera is detected. Previous QR Code scanner remains available as fallback method or can be forced in Settings.
- New alternative layouts: List or Grid
- Accounts can be reordered

### Changed

- Notification banner (when saving settings) now has a fixed position

## [1.1.0] - 2020-03-23

### Added

- Demonstration mode with restricted features and ability to reset content with an artisan command
- Option to close token popup when the code is pasted (by clicking/taping on it)

### Changed

- Options default values can now be set in config/app
- Generated assets are now part of the repo to ease deployement

### Fixed

- Option labels attached to wrong checkboxes
