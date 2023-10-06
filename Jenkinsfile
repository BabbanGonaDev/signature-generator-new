pipeline {
    agent any 
    
    stages {
        
        stage ('Deploying in Prod Environment: production') {
            steps {
                echo 'Deploying the application to production...'
                sshPublisher(publishers: [sshPublisherDesc(configName: 'centos-wp', transfers: [sshTransfer(cleanRemote: false, excludes: '', execCommand: ''' 
                GITUSER=$(cat gituser.txt)
                GITPASSWD=$(cat gittoken.txt)
                USERPASSWD=$(cat password.txt)
                cd /var/www/html/signature-generator-new/
                pwd
                hostname
              
                echo $USERPASSWD | sudo -S git pull https://$GITUSER:$GITPASSWD@github.com/BabbanGonaDev/signature-generator-new.git
                    
                
                ''', execTimeout: 2000000, flatten: false, makeEmptyDirs: false, noDefaultExcludes: false, patternSeparator: '[, ]+', remoteDirectory: '.', remoteDirectorySDF: false, removePrefix: '', sourceFiles: '*.tar.gz')], usePromotionTimestamp: false, useWorkspaceInPromotion: false, verbose: true)])        
            }
        }
        
    }
}
