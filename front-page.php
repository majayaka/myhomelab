<?php
 get_header(); require_once 'components/navbar.inc.php'; ?>

<main>







    <!-- About -->







    <section class="hero min-vh-200 d-flex align-items-center py-5" id="about">







        <div class="container">







            <div class="row my-4">







                <div class="col-lg-8 mx-auto text-center mt-10">







                    <h1 class="display-4 py-2 text-justify">I am Ayaka, Japanese SRE developer in France.</h1>







                    <div class="profile-photo">







                        <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin-profile.webp" alt="Ayaka profile photo">







                    </div>







                </div>







            </div>















<div class="row my-4">







                <div class="col-lg-8 mx-auto text-center mt-10">







                    <a href="#devops" class="custom-btn col-lg-8 my-2">DevOps SKILL SET</a>







                </div>







            </div>







            







    </section>











 <!-- devops skill-set -->















<section id="devops">







        <div class="grid-container d-flex align-items-center mx-auto my-4 py-5">















            <div class="row g-4 my-4 py-4 mx-auto align-items-center text-center">







                <div class=" flex-column mx-auto text-center">







                    <img class="brand-photo" src="<?php echo get_template_directory_uri(); ?>/img/linux.jpg" alt="linux photo">







                    <h4 class="display-5">Linux</h4>







                </div>















                        







                <div class=" flex-column mx-auto text-center">







                    <img class="brand-photo" src="<?php echo get_template_directory_uri(); ?>/img/bash.png" alt="bash photo">







                    <h4 class="display-5">Bash</h4>







                </div>











                <div class=" flex-column mx-auto text-center">







                    <img class="brand-photo" src="<?php echo get_template_directory_uri(); ?>/img/vagrant.png" alt="vagrant photo">







                    <h4 class="display-5">Vagrant</h4>







                </div>











                 <div class=" flex-column mx-auto text-center">







                    <img class="brand-photo" src="<?php echo get_template_directory_uri(); ?>/img/docker.png" alt="docker photo">







                    <h4 class="display-5">Docker</h4>







                </div>











                <div class=" flex-column mx-auto text-center">







                    <img class="brand-photo" src="<?php echo get_template_directory_uri(); ?>/img/helm.png" alt="helm photo">







                    <h4 class="display-5">Helm</h4>







                </div>











<div class=" flex-column mx-auto text-center">







                    <img class="brand-photo" src="<?php echo get_template_directory_uri(); ?>/img/kustomize.png" alt="kustomize photo">







                    <h4 class="display-5">Kustomize</h4>







                </div>











               <div class=" flex-column mx-auto text-center">







                    <img class="brand-photo" src="<?php echo get_template_directory_uri(); ?>/img/jenkins.png" alt="jenkins photo">







                    <h4 class="display-5">Jenkins</h4>







                </div>











                <div class=" flex-column mx-auto text-center">







                    <img class="brand-photo" src="<?php echo get_template_directory_uri(); ?>/img/gitlab.png" alt="gitlab photo">







                    <h4 class="display-5">Gitlab</h4>







                </div>











                <div class=" flex-column mx-auto text-center">







                    <img class="brand-photo" src="<?php echo get_template_directory_uri(); ?>/img/terraform.png" alt="terraform photo">







                    <h4 class="display-5">Terraform</h4>







                </div>











<div class="flex-column mx-auto text-center">







<img class="brand-photo" src="<?php echo get_template_directory_uri(); ?>/img/aws.png" alt="AWS photo">







<h4 class="display-5">AWS</h4>







</div>











                <div class=" flex-column mx-auto text-center">







                    <img class="brand-photo" src="<?php echo get_template_directory_uri(); ?>/img/azure.png" alt="Azure photo">







                    <h4 class="display-5">Azure</h4>







                </div>











            </div>







        </div>























    </section>



















<!-- DevOps Portfolio -->







    <section id="portfolio" class="py-3">







    <div class="container my-3">







        <div class="row">







            <div class="col-md-8 mx-auto text-center mb-4">







                <h6>DevOps</h6>







                <h2>PORTFOLIO</h2>







            </div>







        </div>















        <div class="row g-4 mt-1 mx-auto text-center d-flex align-items-stretch">







            







            <div class="col-md-6 mt-2">







                <div class="project card h-100 shadow-sm">







                    <div class="position-relative overflow-hidden">







                        <a href="https://weather-app-sre.onrender.com/">







                            <img src="<?php echo get_template_directory_uri(); ?>/img/weather-app-thumb.webp" alt="Weather App" class="card-img-top" style="height: 250px; object-fit: cover;">















                            <div class="overlay flex-column pt-5 text-center">







                                <h4 class="text-white">Cloud-Native Weather App<br><small>with Full Observability</small></h4>







                                <div class="text-white white-logo text-center align-items-center d-flex justify-content-center gap-3">







                                    <div class="d-flex flex-column align-items-center">







                                        <i class='bx bxl-nodejs' style="color: #68a063;"></i>







                                        <span style="font-size: 10px;">Node</span>







                                    </div>







                                    <div class="d-flex flex-column align-items-center">







                                        <i class='bx bxl-docker' style="color: #2496ed;"></i>







                                        <span style="font-size: 10px;">Docker</span>







                                    </div>







                                    <div class="d-flex flex-column align-items-center">







                                        <i class='bx bx-package' style="color: #0f1628;"></i>







                                        <span style="font-size: 10px;">Helm</span>







                                    </div>







                                    <div class="d-flex flex-column align-items-center">







                                        <i class='bx bx-line-chart' style="color: #f47a20;"></i>







                                        <span style="font-size: 10px;">Grafana</span>







                                    </div>







                                </div>







                            </div>







                        </a>







                    </div>







                    <div class="card-body d-flex justify-content-around bg-light py-2">







                        <a href="https://weather-app-sre.onrender.com/" target="_blank" class="text-decoration-none text-dark small">







                            <i class='bx bx-link-external'></i> Live Demo







                        </a>







                        <a href="https://github.com/majayaka/weather-app-sre" target="_blank" class="text-decoration-none text-dark small">







                            <i class='bx bxl-github'></i> Repository







                        </a>







                        <a href="https://majayaka.grafana.net/..." target="_blank" class="text-decoration-none text-dark small">







                            <i class='bx bx-line-chart'></i> Monitoring







                        </a>







                    </div>







                </div>







            </div>















      <div class="col-md-6 mt-2">







        <div class="project card h-100 shadow-sm">







                    <div class="position-relative overflow-hidden">







                        <a href="https://gitlab.com/mayaka/oc-p5">







                            <img src="<?php echo get_template_directory_uri(); ?>/img/gitlab-pipeline-thumb.webp" alt="Gitlab pipeline" class="card-img-top" style="height: 250px; object-fit: cover;">







                            <div class="overlay flex-column pt-5 text-center">







                                <h4 class="text-white">MicroCRM: CI/CD & Security<br><small>End-to-End Automation</small></h4>







                                <div class="text-white white-logo mt-2 d-flex justify-content-center gap-3">







                                    <div class="d-flex flex-column align-items-center">







                                        <i class='bx bxl-gitlab' style="color: #fc6d26;"></i>







                                        <span style="font-size: 9px;">GitLab CI</span>







                                    </div>







                                    <div class="d-flex flex-column align-items-center">







                                        <i class='bx bxl-java' style="color: #007396;"></i>







                                        <span style="font-size: 9px;">Java</span>







                                    </div>







                                    <div class="d-flex flex-column align-items-center">







                                        <i class='bx bxl-angular' style="color: #dd0031;"></i>







                                        <span style="font-size: 9px;">Angular</span>







                                    </div>







                                    <div class="d-flex flex-column align-items-center">







                                        <i class='bx bx-check-shield' style="color: #4e9bcd;"></i>







                                        <span style="font-size: 9px;">SonarQube</span>







                                    </div>







                                    <div class="d-flex flex-column align-items-center">







                                        <i class='bx bx-lock-alt' style="color: #2496ed;"></i>







                                        <span style="font-size: 9px;">Trivy</span>







                                    </div>







                                </div>







                            </div>







                        </a>







                    </div>















                    <div class="card-body d-flex justify-content-around bg-light py-2">







                        <a href="https://gitlab.com/mayaka/oc-p5/-/pipelines/2286713073" target="_blank" class="text-decoration-none text-dark small">







                            <i class='bx bxl-gitlab'></i> View Pipeline







                        </a>







                        <a href="https://gitlab.com/mayaka/oc-p5/-/blob/main/README.md" target="_blank" class="text-decoration-none text-dark small">







                            <i class='bx bx-file'></i> Technical Docs







                        </a>







                    </div>







                </div>







            </div>















            <div class="col-md-6 mt-2">







<div class="project card h-100 shadow-sm">







<div class="position-relative overflow-hidden">







<a href="https://gitlab.com/majayaka/oc-p7">







<img src="<?php echo get_template_directory_uri(); ?>/img/bobapp-architecture.webp" alt="DevSecOps Pipeline" class="card-img-top" style="height: 250px; object-fit: cover;">















<div class="overlay flex-column pt-5 text-center">







<h4 class="text-white">BobApp: Multi-Cloud DevSecOps<br><small>Hybrid K3s</small></h4>















<div class="text-white white-logo mt-2 d-flex justify-content-center gap-3">







<div class="d-flex flex-column align-items-center">







<i class='bx bxl-gitlab' style="color: #fc6d26;"></i>







<span style="font-size: 9px;">GitLab CI</span>







</div>







<div class="d-flex flex-column align-items-center">







<i class='bx bx-shield-quarter' style="color: #2496ed;"></i>







<span style="font-size: 9px;">Kaniko/Trivy</span>







</div>







<div class="d-flex flex-column align-items-center">







<i class='bx bx-package' style="color: #0f1628;"></i>







<span style="font-size: 9px;">Helm</span>







</div>







<div class="d-flex flex-column align-items-center">







<i class='bx bxl-kubernetes' style="color: #326ce5;"></i>







<span style="font-size: 9px;">k3s</span>







</div>







<div class="d-flex flex-column align-items-center">







<i class='bx bx-terminal' style="color: #ffffff;"></i>







<span style="font-size: 9px;">IaC (Tf/Ansible)</span>







</div>







</div>







</div>







</a>







</div>















<div class="card-body d-flex justify-content-around bg-light py-2">







<a href="<?php echo get_template_directory_uri(); ?>/img/bobapp-architecture.webp" target="_blank" class="text-decoration-none text-dark small">







<i class='bx bxl-gitlab'></i> Architecture







</a>







<a href="<?php echo get_template_directory_uri(); ?>/assets/presentation-ocp7.pdf" target="_blank" class="text-decoration-none text-primary small fw-bold">







<i class='bx bxs-slideshow'></i> Presentation







</a>







<a href="https://gitlab.com/majayaka/oc-p7/-/pipelines/2002474690" target="_blank" class="text-decoration-none text-dark small">







<i class='bx bx-file'></i> Pipelines







</a>







</div>







</div>







</div>











<div class="col-md-6 mt-2">







<div class="project card h-100 shadow-sm">







<div class="position-relative overflow-hidden">







<a href="https://gitlab.com/majayaka/oc-p9">







<img src="<?php echo get_template_directory_uri(); ?>/img/terraform-infra-thumb.webp" alt="Terraform Automation" class="card-img-top" style="height: 250px; object-fit: cover;">















<div class="overlay flex-column pt-5 text-center">







<h4 class="text-white">AWS Infrastructure as Code<br><small>Automated Provisioning with Terraform</small></h4>















<div class="text-white white-logo mt-2 d-flex justify-content-center gap-3">







<div class="d-flex flex-column align-items-center">







<i class='bx bxl-gitlab' style="color: #fc6d26;"></i>







<span style="font-size: 9px;">GitLab CI</span>







</div>







<div class="d-flex flex-column align-items-center">







<i class='bx bx-code-alt' style="color: #844fba;"></i>







<span style="font-size: 9px;">Terraform</span>







</div>







<div class="d-flex flex-column align-items-center">







<i class='bx bxl-aws' style="color: #ff9900;"></i>







<span style="font-size: 9px;">AWS</span>







</div>







<div class="d-flex flex-column align-items-center">







<i class='bx bx-shield-check' style="color: #4e9bcd;"></i>







<span style="font-size: 9px;">Validate</span>







</div>







</div>







</div>







</a>







</div>















<div class="card-body d-flex justify-content-around bg-light py-2">







<a href="https://gitlab.com/majayaka/oc-p9/-/pipelines/2024052317" target="_blank" class="text-decoration-none text-dark small">







<i class='bx bxl-gitlab'></i> View Pipeline







</a>















<a href="https://gitlab.com/majayaka/oc-p9/-/blob/main/README.md?ref_type=heads" target="_blank" class="text-decoration-none text-dark small">







<i class='bx bx-file'></i> IaC Docs







</a>







</div>







</div>







            </div>











<div class="col-md-6 mt-2">







<div class="project card h-100 shadow-sm">







<div class="position-relative overflow-hidden">







<a href="https://github.com/majayaka/Nextjs-photo/tree/feat/add-performance-ci">







<img src="<?php echo get_template_directory_uri(); ?>/img/lighthouse-report2.webp" alt="Auto-Optimization" class="card-img-top" style="height: 250px; object-fit: cover;">







<div class="overlay flex-column pt-5 text-center">







<h4 class="text-white">Auto-Optimized Site Pipeline<br><small>GitHub Actions & Performance SRE</small></h4>







<div class="text-white white-logo mt-2 d-flex justify-content-center gap-3">







<div class="d-flex flex-column align-items-center">







<i class='bx bxl-github' style="color: #ffffff;"></i>







<span style="font-size: 9px;">Actions</span>







</div>







<div class="d-flex flex-column align-items-center">







<i class='bx bx-tachometer' style="color: #00ff00;"></i>







<span style="font-size: 9px;">Lighthouse</span>







</div>







<div class="d-flex flex-column align-items-center">







<i class='bx bx-image' style="color: #4fb7ff;"></i>







<span style="font-size: 9px;">Opt-Image</span>







</div>







</div>







</div>







</a>







</div>







<div class="card-body d-flex justify-content-around bg-light py-2">







<a href="https://github.com/majayaka/Nextjs-photo/actions/runs/21393486475/job/61585915999" target="_blank" class="text-decoration-none text-dark small">







<i class='bx bxl-github'></i> Workflow







</a>







<a href="http://storage.googleapis.com/lighthouse-infrastructure.appspot.com/reports/1769508396030-36396.report.html" target="_blank" class="text-decoration-none text-dark small text-success fw-bold">







<i class='bx bx-check-double'></i> Perfect Score







</a>







<a href="https://github.com/majayaka/Nextjs-photo/blob/feat/add-performance-ci/README.md" target="_blank" class="text-decoration-none text-dark small">







                            <i class='bx bx-file'></i> Technical Docs







                        </a>







</div>







</div>







</div>











<div class="col-md-6 mt-2">







<div class="project card h-100 shadow-sm">







<div class="position-relative overflow-hidden">







<a href="https://github.com/majayaka/nextjs-gitops">







<img src="<?php echo get_template_directory_uri(); ?>/img/argocd-status.webp" alt="GitOps Pipeline" class="card-img-top" style="height: 250px; object-fit: cover;">







<div class="overlay flex-column pt-5 text-center">







<h4 class="text-white">Full-Automated GitOps Pipeline<br><small>Next.js & ArgoCD & Kubernetes</small></h4>







<div class="text-white white-logo mt-2 d-flex justify-content-center gap-3">







<div class="d-flex flex-column align-items-center">







<i class='bx bxl-github' style="color: #ffffff;"></i>







<span style="font-size: 9px;">Actions</span>







</div>







<div class="d-flex flex-column align-items-center">







<i class='bx bxl-docker' style="color: #2496ed;"></i>







<span style="font-size: 9px;">Docker Hub</span>







</div>







<div class="d-flex flex-column align-items-center">







<i class='bx bxl-kubernetes' style="color: #326ce5;"></i>







<span style="font-size: 9px;">ArgoCD</span>







</div>







</div>







</div>







</a>







</div>







<div class="card-body d-flex justify-content-around bg-light py-2">







<a href="https://github.com/majayaka/nextjs-gitops/actions/runs/21405365656/job/61627606078" target="_blank" class="text-decoration-none text-dark small">







<i class='bx bxl-github'></i> CI Workflow







</a>







<span class="text-decoration-none text-success small fw-bold">







<i class='bx bx-check-double'></i> CD Synced







</span>







<a href="https://github.com/majayaka/nextjs-gitops/blob/main/README.md" target="_blank" class="text-decoration-none text-dark small">







<i class='bx bx-file'></i> GitOps Docs







</a>







</div>







</div>







</div>















        </div> </div>







</section>















    <!-- Web Portfolio -->







    <section id="portfolio2" class="py-3">







        <div class="container my-3">







            <div class="row">







                <div class="col-md-8 mx-auto text-center mb-4">







                    <h6>WEB DEVELOPPEMENT</h6>







                    <h2>PORTFOLIO</h2>







                </div>







            </div>















            <div class="row g-2 mt-1 mx-auto text-center">







                <div class="col-md-6 col-sd-12 h-100 mt-2">







                    <div class="project card h-100">







                        <a href="https://medevent.fr/">







                            <img src="<?php echo get_template_directory_uri(); ?>/img/medevent.webp" alt="Medevent img" class="card-img-top">







                            <div class="overlay flex-column pt-5 text-center">







                                <h4 class="text-white text-center align-items-center">Next.js Corporate website.</h4>







                                <div class="text-white white-logo text-center align-items-center"><i class='bx bxl-html5'></i><i class='bx bxl-css3'></i><i class='bx bxl-javascript'></i><i class='bx bxl-react'></i><i class='bx bxl-tailwind-css'></i> </div>







                            </div>







                        </a>







                    </div>







                </div>















                <div class="col-md-6 col-sd-12 h-100 mt-2">







                    <div class="project card h-100">







                        <a href="https://nextjs-photo-plum.vercel.app/">







                            <img src="<?php echo get_template_directory_uri(); ?>/img/Hohey.webp" alt="Kohey img" class="card-img-top">







                            <div class="overlay flex-column pt-5 text-center">







                                <h4 class="text-white text-center align-items-center">Photography Portfolio website.</h4>







                                <div class="text-white white-logo text-center align-items-center"><i class='bx bxl-html5'></i><i class='bx bxl-css3'></i><i class='bx bxl-javascript'></i><i class='bx bxl-react'></i><i class='bx bxl-tailwind-css'></i> </div>







                            </div>







                        </a>







                    </div>







                </div>















                <div class="col-md-6 col-sd-12 h-100 mt-2">







                    <div class="project card h-100">







                        <a href="https://holomnis.fr/">







                            <img src="<?php echo get_template_directory_uri(); ?>/img/holom.webp" alt="Holomnis img" class="card-img-top">







                            <div class="overlay flex-column pt-5 text-center">







                                <h4 class="text-white text-center align-items-center">Corporate website in Wordpress with original theme.</h4>







                                <div class="text-white white-logo text-center align-items-center"><i class='bx bxl-html5'></i><i class='bx bxl-css3'></i><i class='bx bxl-javascript'></i><i class='bx bxl-php'></i><i class='bx bxl-wordpress'></i></div>







                            </div>







                        </a>







                    </div>







                </div>















                <div class="col-md-6 col-sd-12 h-100 mt-2">







                    <div class="project card h-100">







                        <a href="https://yumotoayaka.fr/">







                            <img src="<?php echo get_template_directory_uri(); ?>/img/ayaka-portfolio2.webp" alt="Ayaka portfolio img" class="card-img-top">







                            <div class="overlay flex-column pt-5 text-center">







                                <h4 class="text-white text-center align-items-center">Web Developer Portfolio website in Wordpress with original theme.</h4>







                                <div class="text-white white-logo text-center align-items-center"><i class='bx bxl-html5'></i><i class='bx bxl-css3'></i><i class='bx bxl-javascript'></i><i class='bx bxl-php'></i><i class='bx bxl-wordpress'></i></div>







                            </div>







                        </a>







                    </div>







                </div>















                <div class="col-md-6 col-sd-12 h-100 mt-2">







                    <div class="project card h-100">







                        <a href="https://rad-brigadeiros-833636.netlify.app/">







                            <img src="<?php echo get_template_directory_uri(); ?>/img/kasa_photo.webp" alt="Kasa img" class="card-img-top">







                            <div class="overlay flex-column pt-5 text-center">







                                <h4 class="text-white text-center align-items-center">Real Estate Search website.</h4>







                                <div class="text-white white-logo text-center align-items-center"><i class='bx bxl-html5'></i><i class='bx bxl-css3'></i><i class='bx bxl-javascript'></i><i class='bx bxl-react'></i><i class='bx bxl-tailwind-css'></i></div>







                            </div>







                        </a>







                    </div>







                </div>























                <div class="col-md-6 col-sd-12 h-100 mt-2">







                    <div class="project card h-100">







                        <a href="https://peppy-griffin-af52c2.netlify.app">







                            <img src="<?php echo get_template_directory_uri(); ?>/img/hottakes3.webp" alt="Hot Takes img" class="card-img-top">







                            <div class="overlay flex-column pt-5 text-center">







                                <h4 class="text-white text-center align-items-center">Hot sauce review website.</h4>







                                <div class="text-white white-logo text-center align-items-center"><i class='bx bxl-html5'></i><i class='bx bxl-css3'></i><i class='bx bxl-javascript'></i></div>







                            </div>







                        </a>







                    </div>







                </div>















                <div class="col-md-6 col-sd-12 h-100 mt-2">







                    <div class="project card h-100">







                        <a href="https://splendid-travesseiro-19d3eb.netlify.app/">







                            <img src="<?php echo get_template_directory_uri(); ?>/img/kanap2.webp" alt="Kanap img" class="card-img-top">







                            <div class="overlay flex-column pt-5 text-center">







                                <h4 class="text-white text-center align-items-center">Sofa brand e-commerce site.</h4>







                                <div class="text-white white-logo text-center align-items-center"><i class='bx bxl-html5'></i><i class='bx bxl-css3'></i><i class='bx bxl-javascript'></i><i class='bx bxl-react'></i><i class='bx bxl-tailwind-css'></i> </div>







                            </div>







                        </a>







                    </div>







                </div>















                <div class="col-md-6 col-sd-12 h-100 mt-2">







                    <div class="project card h-100">







                        <a href="https://majayaka.github.io/P4/">







                            <img src="<?php echo get_template_directory_uri(); ?>/img/lapanthere.webp" alt="la panthere img" class="card-img-top">







                            <div class="overlay flex-column pt-5 text-center">







                                <h4 class="text-white text-center align-items-center">Corporate website of Web agency.</h4>







                                <div class="text-white white-logo text-center align-items-center"><i class='bx bxl-html5'></i><i class='bx bxl-css3'></i></div>







                            </div>







                        </a>







                    </div>







                </div>















                <div class="col-md-6 col-sd-12 h-100 mt-2">







                    <div class="project card h-100">







                        <a href="https://majayaka.github.io/P3/">







                            <img src="<?php echo get_template_directory_uri(); ?>/img/ohmyfood3.webp" alt="Ohmyfood img" class="card-img-top">







                            <div class="overlay flex-column pt-5 text-center">







                                <h4 class="text-white text-center align-items-center">Food delivery service search website.</h4>







                                <div class="text-white white-logo text-center align-items-center"><i class='bx bxl-html5'></i><i class='bx bxl-css3'></i></div>







                            </div>







                        </a>







                    </div>







                </div>















                <div class="col-md-6 col-sd-12 h-100 mt-2">







                    <div class="project card h-100">







                        <a href="https://majayaka.github.io/P2/">







                            <img src="<?php echo get_template_directory_uri(); ?>/img/booki.webp" alt="Booki img" class="card-img-top">







                            <div class="overlay flex-column pt-5 text-center">







                                <h4 class="text-white text-center align-items-center">Guest house reservation site.</h4>







                                <div class="text-white white-logo text-center align-items-center"><i class='bx bxl-html5'></i><i class='bx bxl-css3'></i><i class='bx bxl-javascript'></i><i class='bx bxl-react'></i><i class='bx bxl-tailwind-css'></i> </div>







                            </div>







                        </a>







                    </div>







                </div>















            </div>























        </div>























    </section>























    <!--Blog pick-up-->















    <section id="Pick-up" class="py-3">







        <div class="container my-3">







            <div class="row">







                <div class="col-md-8 mx-auto text-center mb-4">







                    <a href="https://yumotoayaka.fr/blog/">







                        <h6>What's new?</h6>







                        <h2>BLOG</h2>







                    </a>







                </div>







            </div>























            <div class="row mt-3 mx-auto text-center">







                <?php
 $args = array('post_type' => 'post', 'posts_per_page' => 3); $second_loop = new WP_Query($args); $count = 0; if ($second_loop->have_posts()) {
     while ($second_loop->have_posts()) {
         $second_loop->the_post();
         $slug = $post->post_name;
         ?>







                        <div class="col-md-4 mb-3">







                            <div class="project card h-100 <?php if ($count == 0) {
    echo 'active';
}
         ?>">







                                <a href="<?php the_permalink();
         ?>">







                                    <?php if (has_post_thumbnail()) : ?>







                                        <div class="card-img-top">







                                            <?php the_post_thumbnail();
         ?>







                                        </div>







                                    <?php endif;
         ?>







                                    <div class="card-body">







                                        <h2 class="card-title text-left"><?php the_title();
         ?></h2>







                                        <p class="card-text"><?php the_date();
         ?></p>







                                    </div>







                                </a>







                            </div>







                        </div>







                <?php
 ++$count;
     }
     wp_reset_postdata();
 } ?>







            </div>























        </div>























    </section>















</main>
	
<!--Main layout-->
<?php
get_footer(); ?>