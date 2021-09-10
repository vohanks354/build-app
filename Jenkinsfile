pipeline {
    environment {
        APPLICATION_NAME = "app-kirom"
        DB_NAME = "db-kirom"
        // GIT_REPO="https://github.com/vohanks354/build-image.git"
        GIT_REPO="https://vohanks354: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@github.com/vohanks354/build-app.git"
        GIT_BRANCH="master"
        STAGE_TAG = "promoteToQA"
        DEV_PROJECT = "dev"
        STAGE_PROJECT = "stage"
        TEMPLATE_NAME = "kirom-php-mysql-template"
        ARTIFACT_FOLDER = "target"
        PORT = 8082
        YAML_FILE = "kirom-php-mysql.yaml";
    }

    agent any
    stages{
        stage('Get Latest Code') {
            steps {
                git branch: "${GIT_BRANCH}", url: "${GIT_REPO}" // declared in environment
            }
        }
        stage("Build App") {
            steps {
                script{
                    sh "oc create -f ${YAML_FILE}"
                    sh "oc new-app ${TEMPLATE_NAME}"
                }
            }
        }
    }
}