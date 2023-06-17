pipeline {
    agent any
    
    environment {
        SITE_ADDRESS = "ubuntu.umjoshua.xyz"
    }

    stages {
        stage('Deploy') {
            steps {
                sshPublisher(publishers: [sshPublisherDesc(configName: 'ubuntu', transfers: [sshTransfer(cleanRemote: false, excludes: '', execCommand: '', execTimeout: 120000, flatten: false, makeEmptyDirs: false, noDefaultExcludes: false, patternSeparator: '[, ]+', remoteDirectory: '', remoteDirectorySDF: false, removePrefix: '', sourceFiles: '**/*')], usePromotionTimestamp: false, useWorkspaceInPromotion: false, verbose: false)])
            }
        }
        stage('Test'){
            steps{
                sh "curl -X POST -H \"Content-Type: application/json\" -d '{\"baseUrl\": \"http://${env.SITE_ADDRESS}/dcp/\", \"commitId\": \"${env.GIT_COMMIT}\"}' http://backend.umjoshua.xyz/api/scrape"
            }            
        }
    }
    
}
