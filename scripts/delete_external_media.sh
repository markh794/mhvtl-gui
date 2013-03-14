VAR1=`echo $2 | sed 's/ //g'`
VAR2=`echo $1 | sed 's/ //g'`

echo "<FONT COLOR=#FFFF00><b>Deleting external media $VAR2 in Library "$VAR1" :</b></FONT><BR><BR>"
HOMEDIR=`awk 'BEGIN{RS="" } /Library: '$VAR1'/' /etc/mhvtl/device.conf | grep "Home directory:" | cut -d ":" -f2|awk '{print $1}'`
if [ "$HOMEDIR" = "" ] ; then
echo "<FONT COLOR=#FF0000><b>Library $VAR1: Media Home directory = ? $HOMEDIR , setting to /opt/mhvtl</b></FONT><br>"
HOMEDIR="/opt/mhvtl"
fi

if [ -d $HOMEDIR/$VAR2 ] ; then
sudo -u vtl -S rm -Rf $HOMEDIR/$VAR2
STATUS=$?
echo "<FONT COLOR=#FFFFFF>Removed </FONT><FONT COLOR=#FFA500> $HOMEDIR/$VAR2 </FONT><FONT COLOR=#FFFFFF>EXIT:$STATUS</FONT><br>"
else
echo "<pre><FONT COLOR=#FFFF00><b>Unable to find Media Path for $VAR2, please remove manually </b></FONT>"
fi

if [ -f /opt/mhvtl/external_media/$VAR1/$VAR2 ] ; then
sudo -u vtl -S rm -Rf /opt/mhvtl/external_media/$VAR1/$VAR2
STATUS=$?
echo "<FONT COLOR=#FFFFFF>Removed </FONT><FONT COLOR=#FFA500> /opt/mhvtl/external_media/$VAR1/$VAR2 </FONT><FONT COLOR=#FFFFFF>EXIT:$STATUS</FONT><br>"
else
echo "<pre><FONT COLOR=#FFFF00><b>Unable to find Media Path for $each, please remove manually </b></FONT>"
fi

echo "<BR><FONT COLOR=#008000><b>Done ...</b></FONT><br>"
