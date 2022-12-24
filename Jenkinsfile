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
                sh 'ansible-playbook -i /home/mmk/docker/hosts.txt /home/mmk/docker/deploy.yml'
            }
        }
    }
}