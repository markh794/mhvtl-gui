lsscsi -g| egrep "mediumx|tape"| awk '{print $1,$2,$3,$4,$5}' | while read sid dev ven mod fw; do 
if [ "$dev" = "mediumx" ] ;then
echo '</SELECT>'
echo '<img src=images/rightarrpw.png ALIGN=center >' '<SELECT style="color: #000000; background: #FFFFFF; font-weight: bold;" class="set_width" maxlength=75 >'
echo '<OPTION>'$sid mediumx $ven $mod $fw'</OPTION>'
else
echo '<OPTION>'$sid tape $ven $mod $fw'</OPTION>'
fi
done
