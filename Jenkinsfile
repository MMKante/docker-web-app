pipeline {
    agent any

    stages {
        stage('Install prod dependencies') {
            steps {
                sh 'composer install --no-dev' 
            }
        }
        stage('Test') {
            steps {
                sh 'php test'
            }
        }
        stage('Pre-deployment operations') {
            steps {
                sh 'zip -r source.zip ./'
                sh 'chmod 0777 source.zip'
            }
        }
        stage('Deployment') {
            steps {
                sh 'ansible-playbook deploy.yml -i /home/mmk/docker/hosts.txt -u AUTO_USER --private-key=/home/mmk/.ssh/id_rsa'
            }
        }
    }
}