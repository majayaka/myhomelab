# 🛠 DevOps Home Lab Project

This repository is a comprehensive Home Lab project designed to manage and operate my personal portfolio site using modern DevOps best practices. It demonstrates a full CI/CD lifecycle from local development to Kubernetes orchestration.

## 🚀 Tech Stack & Progress

- **Base:** WordPress (PHP 8.2 / Apache)
- **Infrastructure:** Docker / Kubernetes (**k3s/k3d**) —— ✅ *Implemented*
- **CI/CD:** GitHub Actions (Auto-build & Push to GHCR) —— ✅ *Implemented*
- **Container Registry:** GitHub Container Registry (GHCR) —— ✅ *Implemented*
- **Security:** Secret Management (K8s Secrets & .env) —— ✅ *Implemented*
- **Monitoring:** Prometheus & Grafana —— 🚧 *Future Milestone*

## 🏗 System Architecture

The project implements a robust automated pipeline:
1. **Develop:** Local theme development in Docker environment.
2. **Push:** Code changes are pushed to GitHub.
3. **CI (Continuous Integration):** GitHub Actions automatically builds a new Docker image and pushes it to **GHCR**.
4. **Orchestrate:** Kubernetes (k3s) pulls the latest image from GHCR and deploys it with automated service recovery.

## 🛠 How to Run (Local Kubernetes)

### Prerequisites
- k3d (k3s)
- kubectl

### Deployment
1. Create the secret for MySQL:
   ```bash
   kubectl create secret generic mysql-pass --from-literal=password='your_password' --from-literal=root-password='your_root_password'