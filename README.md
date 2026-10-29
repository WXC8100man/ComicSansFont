# ComicSansFont
ComicSansFont is mediawiki extension for font style ComicSans.

---

# Installing the Comic Sans Font Extension in MediaWiki

Follow this guide to install and activate your newly created **Comic Sans Font extension** directly inside your MediaWiki instance.

---

### 📂 1. Verify Folder and File Structure
Ensure your extension files match this structure before transferring them to your web server:

```text
your-mediawiki-root/extensions/ComicSansFont/
├── extension.json
├── ComicSansFont.php
├── LICENSE
└── README.md
```
> **⚠️ Critical Note:** Make sure your configuration file is explicitly named `extension.json` (singular) rather than `extensions.json` as seen in your GitHub repository list, otherwise MediaWiki will fail to recognize the extension.

---

### 🚀 2. Installation and Activation Steps

* **Upload to Extensions Directory:** Move or copy the entire `ComicSansFont` folder into your MediaWiki installation's core extensions folder:
  ```bash
  cp -r ComicSansFont /var/www/html/mediawiki/extensions/
  ```

* **Set Web Server Permissions:** Assign the correct read permissions so your web server user (such as `www-data` or `apache`) can access the extension scripts:
  ```bash
  sudo chown -R www-data:www-data /var/www/html/mediawiki/extensions/ComicSansFont
  sudo chmod -R 755 /var/www/html/mediawiki/extensions/ComicSansFont
  ```

* **Register in Configuration:** Open your `LocalSettings.php` file (located in the root directory of your MediaWiki installation) using a text editor, scroll to the absolute bottom of the file, and append the extension registration function:
  ```php
  # Load Comic Sans Font Extension
  wfLoadExtension( 'ComicSansFont' );
  ```

---

### 🧪 3. Verification & Testing

1. Open your web browser and navigate to your wiki's special info page: 
   `Special:Version`
2. Scroll down to the **Extension** section and check under the **Other** category to confirm that **Comic Sans Font** is active and listed with version `1.0.0`.
3. Open any wiki page, click **Edit**, and test the custom tag wrapper:
   ```xml
   <csf>This text will now display in Comic Sans font!</csf>
   ```

---

### 🛠️ Troubleshooting
If your wiki page goes blank or shows an Internal Error (HTTP 500) right after updating `LocalSettings.php`, turn on error logs inside `LocalSettings.php` to trace the problem:
```php
\$wgShowExceptionDetails = true;
\$wgDevelopmentWarnings = true;
```
