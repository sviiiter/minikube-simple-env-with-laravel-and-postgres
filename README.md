# simple minicube deployment

The point of project creating is just a sandbox to deploy simple environment based on Laravel and Postgres into Minicube and get access to the ingress service from browser

Install minikube:
```
minikube start --driver=docker
```

Config & start:
```
 kubectl apply -f postgres-config.yaml  
 kubectl apply -f postgresql-secret.yaml 
 kubectl apply -f postgres.yaml
 kubectl apply -f webapp.yaml
 kubectl exec <PODNAME> php artisan migrate
```

Usage:
```
minikube service webapp-service --url
minikube dashboard
```