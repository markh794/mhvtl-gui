
if [ -f /usr/sbin/tgt-admin ]; then
TGTADMIN="/usr/sbin/tgt-admin"
else
TGTADMIN="../stgt.git/scripts/tgt-admin"
fi

if [ ! -d /etc/tgt ]; then
mkdir  -p /etc/tgt
fi

case $1 in
save)
echo "Saving STGT Configuratrion in /etc/tgt/targets.conf.mhvtl"
sudo PATH=/usr/sbin:sudo /usr/sbin/tgt-admin --dump >/etc/tgt/targets.conf.mhvtl
sed -i '/<\/target>/i\        bs-type sg\' /etc/tgt/targets.conf.mhvtl
sed -i '/<\/target>/i\        device-type pt\' /etc/tgt/targets.conf.mhvtl

if [ $? = 0 ];then
echo "STATUS $? Succeeded ...."
else
echo "STATUS $? Failed ...Exiting ..."
exit 0
fi
;;
conf)
echo "Configuring STGT Targets and LUNS from /etc/tgt/targets.conf.mhvtl" 
$TGTADMIN -e --conf /etc/tgt/targets.conf.mhvtl
if [ $? = 0 ];then
echo "STATUS $? Succeeded ...."
else
echo "STATUS $? Failed ...Exiting ..."
exit 0
fi
;;

reset)
echo "Removing /etc/tgt/targets.conf.mhvtl"
rm -f /etc/tgt/targets.conf.mhvtl
if [ $? = 0 ];then
echo "STATUS $? Succeeded ...."
else
echo "STATUS $? Failed ...Exiting ..."
exit 0
fi
;;

esac
