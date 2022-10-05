# Example site w/ Caddy + DB

Two external volumes are required: `mariadb` and `caddy_data`

## Example run command
```
MYSQL_USER="me" MYSQL_PASS="example" MYSQL_ROOT_PASS="secret" docker-compose up
```

Note: DB needs to be initialized manually (at this point).  The file to do so can be found at `db_init/run.sql`
