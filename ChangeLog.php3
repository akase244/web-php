<?
require("shared.inc");
commonHeader("PHP 3.0 -> 3.0.4 Changes");
?>
<h3>Sept. 22, 1998 Version 3.0.4</h3>
<li> Added uksort() - array key sort using a user defined comparison function.
<li> Added 'j' support to date() - generates the day of the month, without
  possible leading zeros.
<li> Added support for multiple crypt() encryptions if the system supports it
<li> Added optional support for ASP-style &lt;% %&gt; and &lt;%= tags
<li> Fixed data loss problems with very large numeric array indices on 64-bit
  platforms (e.g. DEC UNIX).
<li> 2 cursor_type parameters for ifx_query() and ifx_prepare changed
  to 1 (bitmask). Added a few constants for use in Informix module.
<li> Added php3.ini option ifx.charasvarchar. If set, trailing blanks
  are stripped from fixed-length char columns. (Makes life easier
  for people using Informix SE.)
<li> Static SNMP module which compiles with ucd-snmp 3.5.2
<li> fixed imap_header & header_info from crashing when a header line
  is > 1024 characters.
<li> Added patch for rfc822_parse_adr to return an array of objects instead
  of a single object.
<li> Informix Online 7.x & SE 7.x support now fairly complete and stable
<li> Add dbase_get_record_with_names() function
<li> Added a special case for open_basedir. When open_basedir is set to "."
  the directory in which the script is stored will be used as basedir.
<li> Include alloca.c in the distribution for platforms without alloca().
<li> Improved stripping of URL passwords from error messages - the length of the
  username/password isn't obvious now, and all protocols are handled properly
  (most importantly, http).
<li> Copying objects that had member functions with static variables produced
  undetermined results.  Fixed.
<li> Added function lstat() and cleaned up the status functions,
  added tests for file status functions (this may break on some plattforms)
<li> Fixed is_link() - it was returning always false.
<li> Fixed apache_note() - it was corrupting memory.
<li> New Function.  void get_meta_tags(string filename);  Parses filename until
  closing head tag and turns all meta tags into variables prefixed with 'meta_'.
  The below meta tag would produce $meta_test="some string here"<br>
    &lt;meta name="test" content="some string here"&gt;
<li> Generalized some internal functions in order to better support calling
  user-level functions from C code.  Fixes a few sporadic problems related
  to constructors inside eval() and more.
<li> Fixed an endless loop in explode(), strstr() and strpos() in case of an
  invalid empty delimiter.
<li> rand() now accepts two optional arguments, which denote the requested range
  of the generated number.  E.g., rand(3,7) would generate a random number
  between 3 and 7.
<li> Added M_PI constant.
<li> Added deg2rad() and rad2deg() for converting radians&lt;-&gt;degrees.
<li> ImageArc() misbehaved when given negative angles, fixed.
<li> Fixed a bug in ereg() that may have caused buglets under some circumstances.
<li> Added imap_status
<li> Shutdown functions, registered via register_shutdown_function(), could never
  generate output in the Apache module version.  Fixed.
<li> Brought IMAP docs into sync with acutal imap code
<li> imap_fetchstructure now takes in optional flags
<li> Fix potential core dumps in imap_append and imap_fetchtext_full
<li> Fix problem in SetCookie() function related to long cookies
<li> Add uasort() function to go along with usort (like sort() and asort())
<li> Add port number to Host header as per section 14.23 of the HTTP 1.1 RFC
<li> Fix imap_reopen to only take 2 arguments with an optional 3rd flags arg
<li> Add optional 2nd argument to imap_close
<li> Add CL_EXPUNGE flag to imap_open() flags
<li> Fix 4th arg on imap_append().  It was getting converted to a long by mistake.
<li> Fix shutdown warning in the LDAP module
<li> *COMPATIBILITY WARNING* imap_fetchstructure() "parametres" object and property
  name changed to "parameters" to match the documentation and to be consistent
  with the rest of the API.
<li> Delete uploaded temporary files automatically at the end of a request
<li> Add upload_max_filesize and correponsing php3_upload_max_filesize directive
  to control the maximum size of an uploaded file.  Setting this to 0 would
  completely eliminate file uploads.
<li> Force $PHP_SELF to PATH_INFO value when running in CGI FORCE_CGI_REDIRECT mode
<li> Add apache_lookup_uri() function which does an internal sub-request lookup
  and returns an object containing the request_rec fields for the URI.  (Yes,
  you have to be a bit of a gearhead to figure this one out)
<li> Fix a few signed char problems causing functions like ucfirst() not to work
  correctly with non-English charsets
<li> md5() function not binary safe - fixed
</ul>

<h3>August 15, 1998 Version 3.0.3</h2>
<ul>
<li> Changed the name of fopen_basedir to open_basedir, to be a little more
  accurate about what it does.
<li> Added Hyperwave module
<li> Added config-option (php3_)enable_dl &lt;on/off&gt;. This enables/disables the
  dl() function.  In safe-mode dl() is always disabled.
<li> Auto-prepended files were crashing under some circumstances - fixed.
<li> Win32 mail fixes provided by walton@nordicdms.com
<li> Comparing between arrays and/or objects now generates a warning (it always
  returns false, as it used to;  no comparison is made)
<li> Fixed a bug in the syntax highlighting code, that made ending-double-quotes
  appear twice under certain circumstances.
<li> Fix bug in filetype() function related to symlinks
<li> Started integrating Informix SE support to PHP configure/makefile setup.
<li> gdttf roundoff fixes from ellson@lucent.com
<li> Added initial Informix SE support files from Danny Heijl - This code still
  needs to be integrated into the PHP configure/makefile setup and the code
  itself needs more work.
<li> return in the global scope now terminates the execution of the current file.
<li> Added the ability to register shutdown function(s), via
  register_shutdown_function($function_name).
<li> Clean up const warnings
<li> Add write support to ftp fopen wrappers
<li> Add strspn() and strcspn() functions
<li> On systems without strerror use Apache version if compiling as Apache module
<li> The PHP start tag was being ignored under some circumstances - fixed.
<li> The db, dbase and filepro functions are now Safe-Mode aware.
<li> Added config-option (php3_)fopen_basedir &lt;path&gt;. This limits the directory-
  tree scripts can open files in to &lt;path&gt;.
<li> Fixed pg_loreadall that didn't always return all the contents in a PostgreSQL
  large object. Also, doesn't pass through anything if method is HEAD.
<li> configure fix to create target Apache module dir
<li> Fix core dump in imageTTFtext() function
<li> Added static IMAP support
<li> Syntax highlighting was generating additional whitespace - fixed.
<li> Added ucwords.  Works like ucfirst, but works on all words within a string.
<li> Added array_walk() - apply user function to every element of an array
<li> Added usort() - array sort that accepts a user defined comparison function!
<li> Added the ability to call user-level functions and object methods on demand
  from the C source using a completely generalized, slick API function.
  Miracles do happen every once in a while.
<li> Added constructors.  Don't even squeek about destructors! :) (we mean that)
<li> Make pg_lowrite() binary safe
<li> Fixed mod_charset option in ./setup
<li> Fixed rewinddir() and dir()::rewind() under Win32 (they didn't work before).
<li> Add Win32 COM support!  By-name referencing is supported using the IDispatch
  interface (automation).  Available functions - COM_Load(), COM_Invoke(),
  COM_PropGet() and COM_PropSet().
</ul>

<h3>July 18 1998 Version 3.0.2</h2>
<ul>
<li>Compile cleanups for *BSD
<li>Add support for the OpenLink ODBC Drivers
<li>Add PHP_SELF, PHP_AUTH_* and HTTP_*_VARS PHP variables to phpinfo() output
<li>Add workaround for broken makes
<li>Add Apache 1.3.1 support (some Apache header files were moved around)
<li>Added apache_note() function.
<li>Fix order of system libraries and detect libresolv correctly 
<li>Fixed a bug in the Sybase-DB module.  Several numeric field types were
  getting truncated when having large values.
<li>Added testpages for unified odbc
<li>Fix php -s seg fault when filename was missing
<li>Made getdate() without args default to current time
<li>Added ImageColorResolve() and some fixes to the freetype support.
<li>Added strcasecmp()
<li>Added error_prepend_string and error_append_string .ini and .conf directives
  to make it possible to configure the look of error messages displayed by PHP
  to some extent
<li>Added E_ERROR, E_WARNING, E_NOTICE, E_PARSE and E_ALL constants, that can be
  used in conjunction with error_reporting()
  (e.g. error_reporting(E_ERROR|E_WARNING|E_NOTICE);
<li>Fixed a crash problem with classes that contained function(s) with default
  values.
<li>Fixed a problem in the browscap module.  Browscap files weren't being read
  properly.
<li>Fix -L path in libphp3.module to make ApacheSSL compile without errors
<li>Fix StripSlashes so it correctly decodes a \0 to a NUL

</ul>


<h3>July 04 1998 Version 3.0.1</h3>
<ul>
<li>echo/print of empty strings don't trigger sending the header anymore.
<li>Implemented shift left and shift right operators (&lt;&lt; and &gt;&gt;)
<li>Compile fix for cc on HP-UX.
<li>Look for beta-version Solid libraries as well.
<li>Make GD module show more info in phpinfo().
<li>Compile fix for NextStep 3.0.
<li>Fix for Oracle extension on OSF/1.
<li>Fix gd 1.3 bug in ImageColorAt().
<li>pg_loread() hopefully handles binary data now.
<li>Turned off some warnings in dns.c
<li>Added ImageTTFBBox() and made ImageTTFText() return bounding box.
<li>Added constants for Ora_Bind()'s modes.
<li>Renamed all hash_*() routines to _php3_hash_*() to avoid clashes with other
  libraries.
<li>Changed uodbc default LONG behaviour: longreadlen 4096 bytes, binmode 1.
  The module now actually uses the php.ini settings.
<li>New PostgreSQL functions:  pg_fetch_row(), pg_fetch_array()
  and pg_fetch_object()
<li>Fix a segmentation fault when calling invalid functions in certain
  circumstances
<li>Fix bug that caused link-related functions to not pay attention to
  run-time safe mode setting (it was using whatever was set at compile time).
<li>Fix bug in exec() function when used in safe mode

</ul>

<? commonFooter(); ?>
