#!/bin/bash

install ()
{
FILENAME=$1
if [ "$FILENAME" = "Empty" ] ; then
	echo '<pre><FONT COLOR=#FFFFFF>'"Patch is Empty !"'</FONT></pre>'
	echo '<br><FORM ACTION="form.patch.mhvtl.php"> <INPUT TYPE=SUBMIT VALUE="Return"></FORM><FORM ACTION="form.patch.mhvtl.php">'
	exit 0
fi

cd ../mhvtl.git/
make distclean >/dev/null 2>&1
patch --dry-run -Np1 < $FILENAME >/tmp/mhvtl.ptaching.tmp 2>&1
if [ $? -eq 0 ]; then
	echo '<pre><FONT COLOR=#FFFF00>'">>> Testing Patch ..."'</FONT><FONT COLOR=#00FFFF>'" Patch OK, Applying ..."'</FONT></pre>'
	patch -p1 < $FILENAME >/tmp/mhvtl.ptaching.tmp 2>&1
	if [ $? -eq 0 ]; then
		OUTPUT=`cat /tmp/mhvtl.ptaching.tmp`
		echo '<pre><FONT COLOR=#FFFFFF>'"$OUTPUT"'</FONT></pre>'
		echo '<pre><FONT COLOR=#00FF00>'"* Success *"'</FONT></pre>'
	fi
else
	echo '<pre><FONT COLOR=#FF0000>'"*** Error ***"'</FONT></pre>'
	echo '<pre><FONT COLOR=#FF00FF>'"OUTPUT says:"'</FONT></pre>'
	OUTPUT=`cat /tmp/mhvtl.ptaching.tmp`
	echo '<pre><FONT COLOR=#FFFFFF>'"$OUTPUT"'</FONT></pre>'
fi

echo '<br><FORM ACTION="confirm.install_mhvtl.php"> <INPUT TYPE=SUBMIT VALUE="Activate"></FORM><FORM ACTION="form.patch.mhvtl.php"><INPUT TYPE=SUBMIT VALUE="Return">'
rm -f /tmp/mhvtl.ptaching.tmp
}


uninstall ()
{
FILENAME=$1

if [ "$FILENAME" = "Empty" ] ; then
	echo '<pre><FONT COLOR=#FFFFFF>'"Patch is Empty !"'</FONT></pre>'
	echo '<br><FORM ACTION="form.patch.mhvtl.php"> <INPUT TYPE=SUBMIT VALUE="Return"></FORM><FORM ACTION="form.patch.mhvtl.php">'
	exit 0
fi

cd ../mhvtl.git/
make distclean >/dev/null 2>&1
echo '<pre><FONT COLOR=#00FFFF>'"Reversing Patch:"'</FONT></pre>'
patch -p1 -R < $FILENAME >/tmp/mhvtl.ptaching.tmp 2>&1
if [ $? -eq 0 ]; then
	OUTPUT=`cat /tmp/mhvtl.ptaching.tmp`
	echo '<pre><FONT COLOR=#FFFFFF>'"$OUTPUT"'</FONT></pre>'
	echo '<pre><FONT COLOR=#00FF00>'"* Success *"'</FONT></pre>'
else
	echo '<pre><FONT COLOR=#FF0000>'"*** Error ***"'</FONT></pre>'
	echo '<pre><FONT COLOR=#FF00FF>'"OUTPUT says:"'</FONT></pre>'
	OUTPUT=`cat /tmp/mhvtl.ptaching.tmp`
	echo '<pre><FONT COLOR=#FFFFFF>'"$OUTPUT"'</FONT></pre>'
fi

echo '<br><FORM ACTION="confirm.install_mhvtl.php"> <INPUT TYPE=SUBMIT VALUE="Activate"></FORM><FORM ACTION="form.patch.mhvtl.php"> <INPUT TYPE=SUBMIT VALUE="Return"></FORM><FORM ACTION="form.patch.mhvtl.php">'
rm -f /tmp/mhvtl.ptaching.tmp
}

delete ()
{
FILENAME=$1
if [ "$FILENAME" = "Empty" ] ; then
	echo '<pre><FONT COLOR=#FFFFFF>'"Patch is Empty !"'</FONT></pre>'
	echo '<br><FORM ACTION="form.patch.mhvtl.php"> <INPUT TYPE=SUBMIT VALUE="Return"></FORM><FORM ACTION="form.patch.mhvtl.php">'
	exit 0
fi

echo '<pre><FONT COLOR=#00FFFF>'"Deleting Patch:"'</FONT></pre>'
cd ../mhvtl.git/
if [ -f $FILENAME ]; then
	echo rm -f  $FILENAME >/tmp/mhvtl.del.ptaching.tmp 2>&1
	rm -f  $FILENAME >>/tmp/mhvtl.del.ptaching.tmp 2>&1
	if [ $? -eq 0 ]; then
		OUTPUT=`cat /tmp/mhvtl.del.ptaching.tmp`
		echo '<pre><FONT COLOR=#FFFFFF>'"$OUTPUT"'</FONT></pre>'
		echo '<pre><FONT COLOR=#00FF00>'"* Success *"'</FONT></pre>'
		echo '<br><FORM ACTION="form.patch.mhvtl.php"> <INPUT TYPE=SUBMIT VALUE="Return"></FORM><FORM ACTION="form.patch.mhvtl.php">'
	else
		echo '<pre><FONT COLOR=#FF0000>'"*** Error ***"'</FONT></pre>'
		echo '<pre><FONT COLOR=#FF00FF>'"OUTPUT says:"'</FONT></pre>'
		OUTPUT=`cat /tmp/mhvtl.del.ptaching.tmp`
		echo '<pre><FONT COLOR=#FFFFFF>'"$OUTPUT"'</FONT></pre>'
		echo '<br><FORM ACTION="form.patch.mhvtl.php"> <INPUT TYPE=SUBMIT VALUE="Return"></FORM><FORM ACTION="form.patch.mhvtl.php">'
	fi
else
	echo '<pre><FONT COLOR=#FF0000>'"*** Error ***"'</FONT></pre>'
	echo '<br><FORM ACTION="form.patch.mhvtl.php"> <INPUT TYPE=SUBMIT VALUE="Return"></FORM><FORM ACTION="form.patch.mhvtl.php">'
fi
}

view ()
{
FILENAME=$1
if [ "$FILENAME" = "Empty" ] ; then
	echo '<pre><FONT COLOR=#FFFFFF>'"Patch is Empty !"'</FONT></pre>'
	echo '<br><FORM ACTION="form.patch.mhvtl.php"> <INPUT TYPE=SUBMIT VALUE="Return"></FORM><FORM ACTION="form.patch.mhvtl.php">'
	exit 0
fi

echo '<pre><FONT COLOR=#00FFFF>'"View Patch:"'</FONT></pre>'
cd ../mhvtl.git/
if [ -f $FILENAME ]; then
	echo $FILENAME >/tmp/mhvtl.view.ptaching.tmp 2>&1
	echo "-------------------------------" >>/tmp/mhvtl.view.ptaching.tmp 2>&1
	cat  $FILENAME >>/tmp/mhvtl.view.ptaching.tmp 2>&1
	if [ $? -eq 0 ]; then
		echo "-------------------------------" >>/tmp/mhvtl.view.ptaching.tmp 2>&1
		OUTPUT=`cat /tmp/mhvtl.view.ptaching.tmp`
		echo '<pre><FONT COLOR=#FFFFFF>'"$OUTPUT"'</FONT></pre>'
	else
		echo '<pre><FONT COLOR=#FF0000>'"*** Error ***"'</FONT></pre>'
		echo '<pre><FONT COLOR=#FF00FF>'"OUTPUT says:"'</FONT></pre>'
		OUTPUT=`cat /tmp/mhvtl.view.ptaching.tmp`
		echo '<pre><FONT COLOR=#FFFFFF>'"$OUTPUT"'</FONT></pre>'
		echo '<br><FORM ACTION="form.patch.mhvtl.php"> <INPUT TYPE=SUBMIT VALUE="Return"></FORM><FORM ACTION="form.patch.mhvtl.php">'
	fi
else
	echo '<pre><FONT COLOR=#FF0000>'"*** Error ***"'</FONT></pre>'
fi
}


if [ -z "$1" ] || [ -z "$2" ] ; then
	echo '<pre><FONT COLOR=#FFFFFF>'"An Error Occured !"'</FONT></pre>'
	exit 0
fi

FILENAME=$2
$1 $FILENAME
