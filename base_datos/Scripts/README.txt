

## entrar a consola psql

-> sudo su - postgres




##DONDE PEGAR EL ARCHIVO

/var/lib/postgresql


"Tener creada la base con el nombre"




## RESTORE DE LA BASE

#####################################


psql -U postgres -H hanya < hanya.sql
#####################################



##CREAR DUMP

## DUMP de base

-> pg_dump base > fichero.sql


