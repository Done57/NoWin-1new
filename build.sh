TERMUX_PKG_HOMEPAGE=https://github.com/Done57/NoWin-1new
TERMUX_PKG_DESCRIPTION="Linux 防呆警示工具"
TERMUX_PKG_LICENSE="GPL-3.0"
TERMUX_PKG_MAINTAINER="Done57"
TERMUX_PKG_VERSION=2.4
TERMUX_PKG_SRCURL=https://github.com/Done57/NoWin-1new/archive/v2.4.tar.gz
TERMUX_PKG_SHA256=$(curl -sL https://github.com/Done57/NoWin-1new/archive/v2.4.tar.gz | sha256sum | cut -d' ' -f1)
TERMUX_PKG_DEPENDS="curl, chafa"
TERMUX_PKG_PLATFORM_INDEPENDENT=true

termux_step_make_install() {
    install -Dm700 $TERMUX_PKG_SRCDIR/src/nowin.sh $TERMUX_PREFIX/bin/nowin
    install -Dm600 $TERMUX_PKG_SRCDIR/src/config.conf $TERMUX_PREFIX/share/nowin/config.conf
    install -Dm600 $TERMUX_PKG_SRCDIR/assets/ascii_art.txt $TERMUX_PREFIX/share/nowin/ascii_art.txt
}
