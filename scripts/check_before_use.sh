testmhvtl()
{
if [ ! -f /usr/bin/vtlcmd ] ; then
echo "FAIL" >/tmp/test.required.components.testmhvtl
echo '<img src="html/images/red_light.png" align=top /><FONT COLOR=orange> FAIL: MHVTL not detected</FONT>'
else
MAJORVER="1"
MINRELEASE="17"
MINVERSION="15"
_RELEASE=`sudo -u root -S /usr/bin/vtlcmd -V| awk '{print $2}'|cut -d "-" -f1`
MAJ=`echo $_RELEASE|awk -F. '{print $1}'`
RELEASE=`echo $_RELEASE|awk -F. '{print $2}'`
VERSION=`echo $_RELEASE|awk -F. '{print $3}'`
if [ $MAJORVER -eq $MAJ ]; then # Version 1.0 is OK
	echo "PASS" >/tmp/test.required.components.testmhvtl
elif [ $RELEASE -gt $MINRELEASE ] && [ $VERSION -gt $MINVERSION ] ; then
echo "PASS" >/tmp/test.required.components.testmhvtl
else
echo "FAIL" >/tmp/test.required.components.testmhvtl
echo '<img src="html/images/red_light.png" align=top /><FONT COLOR=orange> FAIL: Old MHVTL versoin detected: need =>1.17.15 </FONT>'
fi
fi
}


testphp()
{
CHECKPHP=`php html/testphp.php | grep ^"PHP Version"`
if [ ! -z "$CHECKPHP" ]; then
echo "PASS" >/tmp/test.required.components.testphp
else
echo '<img src="html/images/red_light.png" align=top /><FONT COLOR=orange> FAIL: PHP not detected</FONT>'
echo "FAIL" >/tmp/test.required.components.testphp
fi
}


testsudo()
{
CHECK=`sudo -u root -S date`
if [ $? = 0 ] ; then
echo "PASS" >/tmp/test.required.components.testsudo
else
echo '<img src="html/images/red_light.png" align=top /><FONT COLOR=orange> FAIL: Sudo Access not configured</FONT>'
echo "FAIL" >/tmp/test.required.components.testsudo
fi
}



testlsscsi()
{
CHECK=`lsscsi`
if [ $? = 0 ] ; then
echo "PASS" >/tmp/test.required.components.testlsscsi
else
echo '<img src="html/images/red_light.png" align=top /><FONT COLOR=orange> FAIL: lsscsi not installed</FONT>'
echo "FAIL" >/tmp/test.required.components.testlsscsi
fi
}

testmt()
(
CHECK=`mt -v 2>/dev/null`
if [ $? = 0 ] ; then 
echo "PASS" >/tmp/test.required.components.testmt
else
CHECK=`mt -V 2>/dev/null`
if [ $? = 0 ] ; then
echo "PASS" >/tmp/test.required.components.testmt
else
echo '<img src="html/images/red_light.png" align=top /><FONT COLOR=orange> FAIL: mt not installed</FONT>'
echo "FAIL" >/tmp/test.required.components.testmt
fi
fi
)


testmtx()
{
CHECK=`ls /usr/sbin/mtx`
if [ $? = 0 ] ; then
echo "PASS" >/tmp/test.required.components.testmtx
else
echo '<img src="html/images/red_light.png" align=top /><FONT COLOR=orange> FAIL: mtx not installed</FONT>'
echo "FAIL" >/tmp/test.required.components.testmtx
fi
}

testgit()
(
CHECK=`git --version`
if [ $? = 0 ] ; then
echo "PASS" >/tmp/test.required.components.testgit
else
CHECKAGAIN=`/usr/local/bin/git --version`
if [ $? = 0 ] ; then
echo "PASS" >/tmp/test.required.components.testgit
else
echo '<img src="html/images/warning.png" align=top /><FONT COLOR=yellow> WARN: git not installed</FONT>'
echo "PASS" >/tmp/test.required.components.testgit
fi

fi
)

testsysstat()
(
CHECK=`iostat`
if [ $? = 0 ] ; then
echo "PASS" >/tmp/test.required.components.testsysstat
else
echo '<img src="html/images/warning.png" align=top /><FONT COLOR=yellow> WARN: sysstat not installed</FONT>'
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
echo "PASS" >/tmp/test.required.components.teststgt
else
echo '<img src="html/images/warning.png" align=top /><FONT COLOR=yellow> WARN: stgt not installed</FONT>'
echo "PASS" >/tmp/test.required.components.teststgt
fi
)

testscst()
(
CHECK=`ls /usr/local/sbin/iscsi-scstd`
if [ $? = 0 ] ; then
echo "PASS" >/tmp/test.required.components.testscst
else
echo '<img src="html/images/warning.png" align=top /><FONT COLOR=yellow> WARN: scst not installed</FONT>'
echo "PASS" >/tmp/test.required.components.testscst
fi
)


$1
if [ -z "$1" ] ; then
exit 0
fi
