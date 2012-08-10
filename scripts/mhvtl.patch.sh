
install ()
{
FILENAME=$1
cd ../mhvtl.git/
make distclean >/dev/null 2>&1
echo '<pre><FONT COLOR=#FFFF00>'">>> Testing patch only:"'</FONT></pre>'
patch --dry-run -Np1 < $FILENAME >/tmp/mhvtl.ptaching.tmp 2>&1
if [ $? -eq 0 ]; then
echo '<pre><FONT COLOR=#00FF00>'"* Patch compatible, applying ... :"'</FONT></pre>'
patch -p1 < $FILENAME >/tmp/mhvtl.ptaching.tmp 2>&1
else
echo '<pre><FONT COLOR=#FF0000>'"* Patch is not compatible"'</FONT></pre>'
echo '<pre><FONT COLOR=#FF00FF>'"OUTPUT says:"'</FONT></pre>'
OUTPUT=`cat /tmp/mhvtl.ptaching.tmp`
echo '<pre><FONT COLOR=#FFFFFF>'"$OUTPUT"'</FONT></pre>'
exit 0
fi

OUTPUT=`cat /tmp/mhvtl.ptaching.tmp`
echo '<pre><FONT COLOR=#FFFFFF>'"$OUTPUT"'</FONT></pre>'
echo '<br><FORM ACTION="update_mhvtl.php"> <INPUT TYPE=SUBMIT VALUE="Activate"></FORM><FORM ACTION="form.patch.mhvtl.php"> <INPUT TYPE=SUBMIT VALUE="Cancel">'
rm -f /tmp/mhvtl.ptaching.tmp
}


uninstall ()
{
FILENAME=$1
cd ../mhvtl.git/
make distclean >/dev/null 2>&1
patch -R < $FILENAME >/tmp/mhvtl.ptaching.tmp 2>&1
OUTPUT=`cat /tmp/mhvtl.ptaching.tmp`
echo '<pre><FONT COLOR=#FFFFFF>'"$OUTPUT"'</FONT></pre>'
echo '<br><FORM ACTION="update_mhvtl.php"> <INPUT TYPE=SUBMIT VALUE="Activate"></FORM><FORM ACTION="form.patch.mhvtl.php"> <INPUT TYPE=SUBMIT VALUE="Cancel">'
rm -f /tmp/mhvtl.ptaching.tmp
}


if [ -z "$1" ] || [ -z "$2" ] ; then
echo An Error Occured !
exit 0
fi

FILENAME=$2
$1 $FILENAME
