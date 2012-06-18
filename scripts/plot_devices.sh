lsscsi -g| egrep "mediumx|tape"| awk '{print $1,$2,$3,$4,$5}' | while read sid dev ven mod fw; do 
if [ "$dev" = "mediumx" ] ;then
echo '</SELECT>'
echo '<SELECT style="color: #000000; background: #FFFFFF; font-weight: bold;" class="set_width" maxlength=100 >'
echo '<OPTION>'$sid Changer: $ven - Model: $mod - Firmware: $fw'</OPTION>'
else
echo '<OPTION>'$sid Tape: $ven - Model: $mod - Firmware: $fw'</OPTION>'
fi
done
