import axios from 'axios';
const API_URL = '/api';
const lang = document.documentElement.lang.substr(0, 2);

export class APIService{

    constructor(){
    }

    getEndPointUrl(url){
        return `${API_URL}/${url}`;
    }

    getProfileinfo() {        
        return axios.get(this.getEndPointUrl(`profile/${lang}`)).then(response => response);
    }

    getExperienceInfo(){
        return axios.get(this.getEndPointUrl(`experience/${lang}`)).then(response => response);
    }

    getEducationInfo(){
        return axios.get(this.getEndPointUrl(`education/${lang}`)).then(response => response);
    }
    
    getRecommendationsInfo(){
        return axios.get(this.getEndPointUrl(`recommendations/${lang}`)).then(response => response);
    }
    
    getSkillsLanguagesInfo(){
        return axios.get(this.getEndPointUrl(`skills_languages/${lang}`)).then(response => response);
    }

    getCertificationInfo(){
        return axios.get(this.getEndPointUrl('certification')).then(response => response);
    }

    getPortfolioInfo(){
        return axios.get(this.getEndPointUrl('portfolio')).then(response => response);
    }


}