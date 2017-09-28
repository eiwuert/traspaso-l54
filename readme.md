# Plataforma de Traspaso de Gobierno de Chile

## Unidad de Gobierno Digital

## Instrucciones Deployment

Descargar la imagen docker:

```
docker pull egob/traspaso
```

Ejecutar la imagen en el entorno:

```
docker run -itd \
-e cu_callback=https://[HOST NAME]/[URI CALLBACK] \
-e cu_url_auth=https://www.claveunica.gob.cl/openid/authorize/? \
-e cu_url_token=https://www.claveunica.gob.cl/openid/token/? \
-e cu_url_userinfo=https://www.claveunica.gob.cl/openid/userinfo/ \
-e cu_client_id=[CLIENT ID] \
-e cu_client_secret=[CLIENT SECRET] \
-e cu_response_type=code \
-e cu_scope='openid run name' \
-e DB_CONNECTION=mysql \
-e DB_HOST=[DB HOST] \
-e DB_PORT=[BD PORT] \
-e DB_DATABASE=[DB DATABASE NAME] \
-e DB_USERNAME=[DB USER] \
-e DB_PASSWORD=[DB PASS] \
-e AWS_REGION=[REGION AWS] \
-e AWS_BUCKET=[BUCKET AWS] \
-e AWS_KEY=[AWS KEY] \
-e AWS_SECRET=[AWS SECRET] \
-p 9000:9000 \
-v /var/www/docker/traspaso:/var/www/docker/traspaso \
--name traspaso egob/traspaso:latest
```

Correr el servicio

```
docker exec -it traspaso bash -c "sed -i 's/\/var\/run\/php5-fpm.sock/127.0.0.1:9000/g' /etc/php5/fpm/pool.d/www.conf"
docker exec -it traspaso /etc/init.d/php5-fpm start
```
