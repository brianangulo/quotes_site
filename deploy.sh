git pull origin master
docker stop quotes_site || true
docker stop quotes_site_nginx || true
docker rm quotes_site || true
docker rm quotes_site_nginx || true
docker system prune -f -a --volumes
docker compose up -d --build --force-recreate
