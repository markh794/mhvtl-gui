HOMEDIR=`awk 'BEGIN{RS="" } /Library: '$1'/' /etc/mhvtl/device.conf | grep "Home directory:" | cut -d ":" -f2|awk '{print $1}'`
if [ "$HOMEDIR" = "" ] ; then
HOMEDIR="/opt/mhvtl"
fi

CHECKUNIQUE=`ls -1d $HOMEDIR/$2 2>/dev/null`
if [ -z "$CHECKUNIQUE" ]; then
checkunique=YES
else
checkunique=NO
fi

echo $checkunique
