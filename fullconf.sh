#!/bin/bash

# Sintaxis cortesía de la wiki de Arch Linux
# wiki.archlinux.org
echo "Realizando backup completo de /etc..."
if ! rsync -aAXHv /etc /mnt/backup_device/full --log-file=/root/logs/rsynclog.txt;
    then
        echo "Ha ocurrido un error al hacer el backup de la configuración (completo)"
        echo "Ha ocurrido un error al hacer el backup de la configuración (completo)" >> /root/logs/log.txt 
        echo "La salida del programa se encuentra en el archivo /root/logs/log.txt"
    else
        echo "Operación exitosa" >> /root/logs/log.txt
        echo "Operación exitosa"
fi

