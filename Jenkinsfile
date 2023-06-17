pipeline {
    agent any
    
    environment {
        MY_IP_ADDRESS = sh(script: "ip addr | grep wlp0s20f3 | awk '/inet / {print \$2}' | cut -f1 -d'/'", returnStdout: true).trim()
    }

    stages {
        stage('Deploy') {
            steps {
                sshPublisher(publishers: [sshPublisherDesc(configName: 'myhost', transfers: [sshTransfer(cleanRemote: false, excludes: '', execCommand: '', execTimeout: 120000, flatten: false, makeEmptyDirs: false, noDefaultExcludes: false, patternSeparator: '[, ]+', remoteDirectory: '', remoteDirectorySDF: false, removePrefix: '', sourceFiles: '**/*')], usePromotionTimestamp: false, useWorkspaceInPromotion: false, verbose: false)])
            }
        }
        stage('Test'){
            steps{
                // sh "curl -X POST -H \"Content-Type: application/json\" -d '{\"baseUrl\": \"http://${env.MY_IP_ADDRESS}/dcp/\", \"commitId\": \"${env.GIT_COMMIT}\"}' http://192.168.49.2:30003/api/scrape"
            }            
        }
    }
    
}
