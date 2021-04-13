import { Injectable } from '@angular/core';
import {HttpClientModule} from '@angular/common/http';
import {Observable} from 'rxjs';
import {environment} from '../../environments/environment';

interface PhpData
{
  status: string;
  data: any;
}

@Injectable({
  providedIn: 'root'
})
export class MessageService {

  constructor(private http: HttpClientModule) {
  }

  sendMessage(url: string, data: object): Observable<PhpData>
  {
    environment.url = 'http://127.0.0.1/Projet-Full-Stack/Backend/';
    const urlDest = (environment.url + url + '.php');
    const formData = new FormData();
    if ( data !== null && data !== undefined )
    {
      for (const [key, value] of Object.entries(data) ) { formData.append(key, value); }
    }
    console.log(data);
    return this.http.post<PhpData>(urlDest, formData, {withCredentials: true});
  }
}
