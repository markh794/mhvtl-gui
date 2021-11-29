#!/bin/bash

# This script assumes it is located in a subdirectory from 'mhvtl' source root

echo "Script Begin"

get_os_name()
{
	if [[ "$(hostnamectl | grep -i ubuntu | wc -l)" != "0" ]]; then
		OS_NAME='ubuntu'
	elif [[ "$(hostnamectl | grep -i sles | wc -l)" != "0" ]]; then
		OS_NAME='sles'
	elif [[ "$(hostnamectl | grep -i opensuse | wc -l)" != "0" ]]; then
		OS_NAME='opensuse'
	elif [[ "$(hostnamectl | grep -i centos | wc -l)" != "0" ]]; then
		OS_NAME='centos'
	else
		echo 'This os is not supported!'
		exit 1
	fi
	echo "OS_NAME is $OS_NAME"
}

# check our script has been started with root auth
if [[ "$(id -u)" != "0" ]]; then
	echo "This script must be run with root privileges. Please run again as either root or using sudo."
	tput sgr0
	exit 1
fi

get_os_name

# Lets break the script if there are any errors
set -e

install_ubuntu_pre_req()
{
	echo "Ubuntu"
	sudo apt-get update && sudo apt-get install sysstat mtx mt-st sg3-utils zlib1g-dev git nginx php5-common php5-cli php5-fpm lsscsi build-essential gawk alien fakeroot linux-headers-$(uname -r) linux-modules-extra-$(uname -r) targetcli-fb -y
}

install_centos_pre_req()
{
	echo "CentOS"

	sudo yum install -y deltarpm
	sudo yum update -y && sudo yum install -y git mc ntp gcc gcc-c++ make kernel-devel-$(uname -r) zlib-devel sg3_utils lsscsi mt-st mtx perl-Config-General targetcli
	sudo yum upgrade -y
	# Rebuild VBox guest tools for any new kernel(s) installed
	/sbin/rcvboxadd quicksetup all

}

install_sles_pre_req()
{
	echo "SLES/OpenSuse"

	# Workaround so that we install the same kernel-devel and kernel-syms version as the running kernel.
	UNAME_R=$(echo $(uname -r) | cut -d "-" -f-2)
	PATCHED_KERNEL_VERSION=$(sudo zypper se -s kernel-devel | grep ${UNAME_R} | cut -d "|" -f4 | tr -d " ")
	sudo zypper install -y --oldpackage kernel-devel-${PATCHED_KERNEL_VERSION}
	sudo zypper install -y --oldpackage kernel-syms-${PATCHED_KERNEL_VERSION}

	sudo zypper install -y git mc ntp gcc gcc-c++ make zlib-devel sg3_utils lsscsi mtx perl-Config-General targetcli-fb
}

install_pre_req()
{
	if [[ ${OS_NAME} == 'ubuntu' ]]; then
		SYSTEMD_GENERATOR_DIR="/lib/systemd/system-generators"
		install_ubuntu_pre_req

	elif [[ ${OS_NAME} == 'centos' ]]; then
		SYSTEMD_GENERATOR_DIR="/lib/systemd/system-generators"
		install_centos_pre_req

	elif [[ ${OS_NAME} == 'sles' ]] || [[ ${OS_NAME} == 'opensuse' ]]; then
		SYSTEMD_GENERATOR_DIR="/usr/lib/systemd/system-generators"
		install_sles_pre_req
	fi
}

# Install required packages
install_pre_req


echo "Still need to install php and apache yet"

exit 0
