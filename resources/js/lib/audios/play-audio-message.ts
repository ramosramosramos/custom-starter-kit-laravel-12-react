
import messageSound from '../../assets/audios/message_audio.mp3';
import warningSound from '../../assets/audios/warning_audio.mp3';
import successSound from '../../assets/audios/success_audio.mp3';
import infoSound from '../../assets/audios/info_audio.mp3';
import errorSound from '../../assets/audios/error_audio.mp3';

type playAudio = {
    type: 'message' | 'warning' | 'success' | 'info' | 'error';
}

export const playAudio = (type: playAudio['type']) => {
    let audio = new Audio(messageSound);
    switch (type) {
        case 'message':
            audio = new Audio(messageSound);
            break;
        case 'warning':
            audio = new Audio(warningSound);
            break;
        case 'success':
            audio = new Audio(successSound);
            break;
        case 'info':
            audio = new Audio(infoSound);
            break;
        case 'error':
            audio = new Audio(errorSound);
            break;
    }

    audio.play();
}

//usage
// <button onClick={() => playAudio('message')}>
//     <span>Play Audio</span>
// </button>

