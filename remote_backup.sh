#!/bin/bash
# Cortesia, nuevamente, de la fantastica wiki de Arch Linux.
# NOTA: La key pública debe definirse en la ubicación de backup
# La ip probablemente varíe, consideresela un placeholder.

rsync -a --quiet --update -e ssh /mnt/backup_device root@192.168.1.204:/root
