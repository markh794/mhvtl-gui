
if [ -f /usr/sbin/tgt-admin ]; then
TGTADMIN="/usr/sbin/tgt-admin"
else
TGTADMIN="../stgt.git/scripts/tgt-admin"
fi

case $1 in
save)
echo "Saving STGT Configuratrion in /etc/tgt/targets.conf"
sudo PATH=/usr/sbin:sudo /usr/sbin/tgt-admin --dump >/etc/tgt/targets.conf
sed -i '/<\/target>/i\        bs-type sg\' /etc/tgt/targets.conf 
sed -i '/<\/target>/i\        device-type pt\' /etc/tgt/targets.conf

if [ $? = 0 ];then
echo "STATUS $? Succeeded ...."
else
echo "STATUS $? Failed ...Exiting ..."
exit 0
fi
;;
conf)
echo "Configuring STGT Targets and LUNS from /etc/tgt/targets.conf" 
$TGTADMIN -e
if [ $? = 0 ];then
echo "STATUS $? Succeeded ...."
else
echo "STATUS $? Failed ...Exiting ..."
exit 0
fi
;;

reset)
echo "Restting /etc/tgt/targets.conf"
echo >/etc/tgt/targets.conf
if [ $? = 0 ];then
echo "STATUS $? Succeeded ...."
else
echo "STATUS $? Failed ...Exiting ..."
exit 0
fi
;;

esac
