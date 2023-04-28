pipeline {
    agent any

    stages {
        stage('Deploy') {
            steps {
                sshPublisher(publishers: [sshPublisherDesc(configName: 'myhost', transfers: [sshTransfer(cleanRemote: false, excludes: '', execCommand: '', execTimeout: 120000, flatten: false, makeEmptyDirs: false, noDefaultExcludes: false, patternSeparator: '[, ]+', remoteDirectory: '', remoteDirectorySDF: false, removePrefix: '', sourceFiles: '**/*')], usePromotionTimestamp: false, useWorkspaceInPromotion: false, verbose: false)])
            }
        }
        stage('Test'){
            steps{
                sh "curl -X POST -H \"Content-Type: application/json\" -d '{\"baseUrl\": \"http://172.16.0.191/dcp/\", \"commitId\": \"${env.GIT_COMMIT}\"}' http://192.168.49.2:30003/api/scrape"
            }            
        }
    }
    
}
