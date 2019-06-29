import axios from 'axios';
const API_URL = 'http://127.0.0.1:8000/api';
const lang = document.documentElement.lang.substr(0, 2);
export class APIService{

    constructor(){
    }

    getEndPointUrl(url){
        return `${API_URL}/${url}/${lang}`;
    }

    getAboutMeinfo() {        
        return axios.get(this.getEndPointUrl('me')).then(response => response);
    }

    getDetailsInfo(){
        return axios.get(this.getEndPointUrl('details')).then(response => response);
    }

    getExperienceInfo(){
        return axios.get(this.getEndPointUrl('experience')).then(response => response);
    }

    getEducationInfo(){
        return axios.get(this.getEndPointUrl('education')).then(response => response);
    }

    getCertificationInfo(){
        return axios.get(this.getEndPointUrl('certification')).then(response => response);
    }

    getRecommendationsInfo(){
        return axios.get(this.getEndPointUrl('recommendations')).then(response => response);
    }

    getSkillsInfo(){
        return axios.get(this.getEndPointUrl('skills')).then(response => response);
    }

    getPortfolioInfo(){
        return axios.get(this.getEndPointUrl('portfolio')).then(response => response);
    }


}