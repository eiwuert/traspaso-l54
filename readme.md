# Plataforma de Traspaso

## Unidad de Gobierno Digital

## Instrucciones Deployment

Descargar la imagen docker:

```
docker pull egob/traspaso
```

Ejecutar la imagen en el entorno:

```
docker run -itd \
-e cu_callback=https://[HOSTNAME]/callback \
-e cu_url_auth=https://www.claveunica.gob.cl/openid/authorize/? \
-e cu_url_token=https://www.claveunica.gob.cl/openid/token/? \
-e cu_url_userinfo=https://www.claveunica.gob.cl/openid/userinfo/ \
-e cu_client_id=[CLIENT_ID] \
-e cu_client_secret=[CLIENT_SECRET] \
-e cu_response_type=code \
-e cu_scope='openid run name' \
-e DB_CONNECTION=mysql \
-e DB_HOST=[DB_HOST] \
-e DB_PORT=[BD_PORT] \
-e DB_DATABASE=[DB_NAME] \
-e DB_USERNAME=[DB_USER] \
-e DB_PASSWORD=[DB_PASS] \
-p 9000:9000 \
-v /var/www/docker/traspaso:/var/www/docker/traspaso \
--name traspaso traspaso:latest
```

Correr el servicio

```
docker exec -it traspaso bash -c "sed -i 's/\/var\/run\/php5-fpm.sock/127.0.0.1:9000/g' /etc/php5/fpm/pool.d/www.conf"
docker exec -it traspaso /etc/init.d/php5-fpm start
```