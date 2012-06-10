#!/bin/sh
# Detects which OS and if it is Linux then it will detect which Linux Distribution.

OS=`uname -s`
REV=`uname -r`
MACH=`uname -m`

GetVersionFromFile()
{
	VERSION=`cat $1 | tr "\n" ' ' | sed s/.*VERSION.*=\ // `
}

if [ "${OS}" = "Linux" ] ; then
	KERNEL=`uname -r`

	if [ -f /etc/redhat-release ] ; then
		DIST='RedHat'
		PSUEDONAME=`cat /etc/redhat-release | sed s/.*\(// | sed s/\)//`
		REV=`cat /etc/redhat-release | sed s/.*release\ // | sed s/\ .*//`
	elif [ -f /etc/SUSE-release ] ; then
		DIST=`cat /etc/SUSE-release | tr "\n" ' '| sed s/VERSION.*//`
		REV=`cat /etc/SUSE-release | tr "\n" ' ' | sed s/.*=\ //`
	elif [ -f /etc/mandrake-release ] ; then
		DIST='Mandrake'
		PSUEDONAME=`cat /etc/mandrake-release | sed s/.*\(// | sed s/\)//`
		REV=`cat /etc/mandrake-release | sed s/.*release\ // | sed s/\ .*//`
	elif [ -f /etc/debian_version ] ; then
		DIST="Debian `cat /etc/debian_version`"
		REV=""
        elif [ -f /etc/slackware-release ] ; then
                DIST='Slackware'
                PSUEDONAME=`cat /etc/slackware-release | sed s/.*\(// | sed s/\)//`
                REV=`cat /etc/slackware-release | sed s/.*release\ // | sed s/\ .*//`
	elif [ -f /etc/fedora-release ] ; then
                DIST='Fedora'
                PSUEDONAME=`cat /etc/fedora-release | sed s/.*\(// | sed s/\)//`
                REV=`cat /etc/fedora-release | sed s/.*release\ // | sed s/\ .*//`
        elif [ -f /etc/oracle-release ] ; then
                DIST='Oracle'
                PSUEDONAME=`cat /etc/oracle-release | sed s/.*\(// | sed s/\)//`
                REV=`cat /etc/oracle-release | sed s/.*release\ // | sed s/\ .*//`
        elif [ -f /etc/lsb-release ] ; then
                DIST='Ubuntu'
                PSUEDONAME=`cat /etc/lsb-release | sed s/.*\(// | sed s/\)//`
                REV=`cat /etc/lsb-release | sed s/.*release\ // | sed s/\ .*//`
        elif [ -f /etc/gentoo-release ] ; then
                DIST='Gentoo'
                PSUEDONAME=`cat /etc/gentoo-release | sed s/.*\(// | sed s/\)//`
                REV=`cat /etc/gentoo-release | sed s/.*release\ // | sed s/\ .*//`

        elif [ ! -f /etc/*_version ] ; then
                DIST="Unknown"
                PSUEDONAME=""
                REV=""
        elif [ ! -f /etc/*-version ] ; then
                DIST="Unknown"
                PSUEDONAME=""
                REV=""
        elif [ ! -f /etc/*release ] ; then
                DIST="Unknown"
                PSUEDONAME=""
                REV=""
        elif [ ! -f /etc/*Release ] ; then
                DIST="Unknown"
                PSUEDONAME=""
                REV=""
	fi
	if [ -f /etc/UnitedLinux-release ] ; then
		DIST="${DIST}[`cat /etc/UnitedLinux-release | tr "\n" ' ' | sed s/VERSION.*//`]"
	fi
	
	OSSTR="${OS} ${DIST} ${REV}(${PSUEDONAME} ${KERNEL} ${MACH})"

fi
echo ${OSSTR}
