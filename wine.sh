#!/bin/bash
# NoWin Wine 启动器
#切勿用到非法用途
#任何违法的事情项目作者概不负责
#qq:2184059237

PREFIX=${PREFIX:-/data/data/com.termux/files/usr}

# 检查 Wine
if ! command -v wine &> /dev/null; then
    echo "[错误] Wine 未安装，正在安装..."
    pkg install x11-repo -y
    pkg install wine-stable -y
fi

# 检查 VNC
if ! command -v vncserver &> /dev/null; then
    echo "[错误] VNC 未安装，正在安装..."
    pkg install x11-repo -y
    pkg install tigervnc -y
fi

# 检查 Openbox（轻量窗口管理器）
if ! command -v openbox &> /dev/null; then
    echo "[提示] Openbox 未安装，正在安装..."
    pkg install openbox -y
fi

# 配置 Wine 驱动器（首次）
WINE_DRIVE_CONFIG="$HOME/.wine/dosdevices"

if [ ! -f "$WINE_DRIVE_CONFIG/d:" ] && [ ! -f "$WINE_DRIVE_CONFIG/e:" ]; then
    echo "首次启动 Wine 配置"
    echo "输入 D盘 路径 (绝对路径，例如: /sdcard/Download)"
    read -p "D盘路径: " d_path
    if [ -n "$d_path" ] && [ -d "$d_path" ]; then
        ln -s "$d_path" "$WINE_DRIVE_CONFIG/d:"
        echo "D盘已配置: $d_path"
    fi

    echo "输入 E盘 路径 (绝对路径，例如: /sdcard/Download/Windows)"
    read -p "E盘路径: " e_path
    if [ -n "$e_path" ] && [ -d "$e_path" ]; then
        ln -s "$e_path" "$WINE_DRIVE_CONFIG/e:"
        echo "E盘已配置: $e_path"
    fi
fi

# 设置 VNC 密码（首次）
if [ ! -f ~/.vnc/passwd ]; then
    echo "首次启动 VNC，请设置密码（至少6位）"
    vncpasswd
fi

# 启动 VNC
echo "正在启动 VNC 服务..."
vncserver :1 -geometry 1280x720 -depth 24 -localhost no 2>/dev/null || {
    echo "VNC 服务已在运行，尝试重启..."
    vncserver -kill :1 2>/dev/null
    vncserver :1 -geometry 1280x720 -depth 24 -localhost no
}

# 启动 Openbox（轻量窗口管理器）
DISPLAY=:1 openbox &

echo "VNC 服务已启动"
echo "请用 VNC Viewer 连接 localhost:5901"
echo ""

# 菜单
while true; do
    echo "1) 运行 .exe 文件"
    echo "2) Wine 配置 (winecfg)"
    echo "3) 停止 VNC 服务"
    echo "0) 退出"
    read -p "请选择 [0-3]: " choice

    case $choice in
        1)
            read -p "输入 .exe 文件路径: " exe_path
            if [ -f "$exe_path" ]; then
                DISPLAY=:1 wine "$exe_path"
            else
                echo "文件不存在"
            fi
            read -p "按回车键继续..."
            ;;
        2)
            DISPLAY=:1 winecfg
            read -p "按回车键继续..."
            ;;
        3)
            echo "正在停止 VNC..."
            vncserver -kill :1 2>/dev/null
            echo "VNC 已停止"
            read -p "按回车键继续..."
            ;;
        0)
            echo "退出"
            exit 0
            ;;
        *)
            echo "无效选择"
            ;;
    esac
done