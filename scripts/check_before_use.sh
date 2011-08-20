testmhvtl()
{
set -xv
MINRELEASE="17"
MINVERSION="15"
RELEASE=`sudo -u root -S vtlcmd -V| cut -d ":" -f2|cut -d "." -f2`
VERSION=`sudo -u root -S vtlcmd -V| cut -d ":" -f2|cut -d "." -f3| cut -d"-" -f1`
if [ $RELEASE -gt $MINRELEASE ] && [ $VERSION -gt $MINVERSION ] ; then
echo '<img src="html/images/green_light.png" align=top />' PASS: MHVTL Version $RELEASE.$VERSION Installed
echo "PASS" >/tmp/test.required.components.testmhvtl
else
echo '<img src="html/images/red_light.png" align=top /> FAIL: MHVTL not installed'
echo "FAIL" >/tmp/test.required.components.testmhvtl
fi
}


testphp()
{
CHECKPHP=`php html/testphp.php | grep ^"PHP Version"`
if [ ! -z "$CHECKPHP" ]; then
echo '<img src="html/images/green_light.png" align=top />' PASS: $CHECKPHP Installed
echo "PASS" >/tmp/test.required.components.testphp
else
echo '<img src="html/images/red_light.png" align=top /> FAIL: PHP not installed'
echo "FAIL" >/tmp/test.required.components.testphp
fi
}


testsudo()
{
CHECK=`sudo -u root -S date`
if [ $? = 0 ] ; then
echo '<img src="html/images/green_light.png" align=top /> PASS: Sudo Access Setup'
echo "PASS" >/tmp/test.required.components.testsudo
else
echo '<img src="html/images/red_light.png" align=top /> FAIL: Sudo Access not setup'
echo "FAIL" >/tmp/test.required.components.testsudo
fi
}



testlsscsi()
{
CHECK=`lsscsi`
if [ $? = 0 ] ; then
echo '<img src="html/images/green_light.png" align=top />' PASS: lsscsi Installed
echo "PASS" >/tmp/test.required.components.testlsscsi
else
echo '<img src="html/images/red_light.png" align=top /> FAIL: lsscsi not installed'
echo "FAIL" >/tmp/test.required.components.testlsscsi
fi
}

testmt()
(
CHECK=`mt -v`
if [ $? = 0 ] ; then
echo '<img src="html/images/green_light.png" align=top />' PASS: `mt --version` Installed
echo "PASS" >/tmp/test.required.components.testmt
else
echo '<img src="html/images/red_light.png" align=top /> FAIL: mt not installed'
echo "FAIL" >/tmp/test.required.components.testmt
fi
)


testmtx()
{
CHECK=`ls /usr/sbin/mtx`
if [ $? = 0 ] ; then
echo '<img src="html/images/green_light.png" align=top />' PASS: mtx Installed
echo "PASS" >/tmp/test.required.components.testmtx
else
echo '<img src="html/images/red_light.png" align=top /> FAIL: mtx not installed'
echo "FAIL" >/tmp/test.required.components.testmtx
fi
}

testgit()
(
CHECK=`git --version`
if [ $? = 0 ] ; then
echo '<img src="html/images/green_light.png" align=top />' PASS: `git --version` Installed
echo "PASS" >/tmp/test.required.components.testgit
else
CHECKAGAIN=`/usr/local/bin/git --version`
if [ $? = 0 ] ; then
echo '<img src="html/images/green_light.png" align=top />' PASS: `git --version` Installed
echo "PASS" >/tmp/test.required.components.testgit
else
echo '<img src="html/images/warning.png" align=top /> FAIL: git not installed'
echo "PASS" >/tmp/test.required.components.testgit
fi

fi
)

testsysstat()
(
CHECK=`iostat`
if [ $? = 0 ] ; then
echo '<img src="html/images/green_light.png" align=top /> PASS: sysstat installed'
echo "PASS" >/tmp/test.required.components.testsysstat
else
echo '<img src="html/images/warning.png" align=top /> FAIL: sysstat not installed'
echo "PASS" >/tmp/test.required.components.testsysstat
fi
)


teststgt()
(
if [ -f /usr/sbin/tgtadm ]; then
TGTADM="/usr/sbin/tgtadm"
else
TGTADM="stgt.git/usr/tgtadm"
fi

if [ -f /usr/sbin/tgtd ]; then
TGTD="/usr/sbin/tgtd"
else
TGTD="stgt.git/usr/tgtd"
fi


CHECK=`$TGTADM --help`
if [ $? = 0 ] ; then
echo '<img src="html/images/green_light.png" align=top />' PASS: stgt `$TGTD --version` Installed
echo "PASS" >/tmp/test.required.components.teststgt
else
echo '<img src="html/images/warning.png" align=top /> FAIL: stgt not installed'
echo "PASS" >/tmp/test.required.components.teststgt
fi
)

testscst()
(
CHECK=`ls /usr/local/sbin/iscsi-scstd`
if [ $? = 0 ] ; then
echo '<img src="html/images/green_light.png" align=top /> PASS: scst installed'
echo "PASS" >/tmp/test.required.components.testscst
else
echo '<img src="html/images/warning.png" align=top /> FAIL: scst not installed'
echo "PASS" >/tmp/test.required.components.testscst
fi
)


$1
if [ -z "$1" ] ; then
exit 0
fi
