import { Inertia } from "@inertiajs/inertia";
import React, { useState } from "react";
import {Head, usePage } from "@inertiajs/inertia-react";
import "../../../resources/css/style.css";

export default function Login() {
    const { error } = usePage().props.errors;
    const [idAdmin, setIdAdmin] = useState();
    const [nis, setNis] = useState();
    const [nip, setNip] = useState();
    const [password, setPassword] = useState();

    const [formAdminVisible, setFormAdminVisible] = useState(false);
    const [formSiswaVisible, setFormSiswaVisible] = useState(false);
    const [formGuruVisible, setFormGuruVisible] = useState(false);

    const handleLoginAdmin = () => {
        Inertia.post("/login/admin", {
            idAdmin,
            password,
        });
    };
    const handleLoginSiswa = () => {
        Inertia.post("/login/siswa", {
            nis,
            password,
        });
    };
    const handleLoginGuru = () => {
        Inertia.post("/login/guru", {
            nip,
            password,
        });
    };

    return(
        <>
           <head title="Login" />
           <div className="header">
              <img src="/gambar/header.jpg" height="40%" width="100%" />
           </div>
           <div className="menu">
            <b>
                <a href="#" className="active">HOME</a>
            </b>
           </div>
           <div className="kiri-atas">
              <fieldset>
                <legend></legend>
                <center>
                    <button className="button-primary"
                    onClick={() => {
                         setFormAdminVisible(!formAdminVisible);
                         setFormSiswaVisible(false);
                         setFormGuruVisible(false);
                    }}>ADMIN</button>
                    <button className="button-primary"
                    onClick={() => {
                         setFormSiswaVisible(!formSiswaVisible);
                         setFormGuruVisible(false);
                         setFormAdminVisible(false);
                    }}>SISWA</button>
                    <button className="button-primary"
                    onClick={() => {
                         setFormGuruVisible(!formGuruVisible);
                         setFormSiswaVisible(false);
                         setFormAdminVisible(false);
                    }}>GURU</button>

                    <hr />
                    <b>LOGIN SESUAI DENGAN ANDA</b>
                    <hr />
                </center>
              </fieldset>
           <div style={{ display: formSiswaVisible ? "block" : "none" }}>
             <center>
                <b>LOGIN SISWA</b>
                <p>{error}</p>
             </center>
            <table>
                <tr>
                    <td>NIS</td>
                    <td>
                        <input type="text" onChange={(e) => setNis(e.target.value)} />
                    </td>
                </tr>
                <tr>
                    <td>PASSWORD</td>
                    <td>
                        <input type="text" onChange={(e) => setPassword(e.target.value)} />
                    </td>
                </tr>
                <tr>
                    <td colSpan="2">
                        <center>
                            <button className="button-primary" type="button"
                            onClick={() => handleLoginSiswa()}>LOGIN</button>
                        </center>       
                    </td>
                </tr>
            </table>
           </div>
        
           <div style={{ display: formGuruVisible ? "block" : "none" }}>
             <center>
                <b>LOGIN GURU</b>
                <p>{error}</p>
             </center>
            <table>
                <tr>
                    <td>NIP</td>
                    <td>
                        <input type="text" onChange={(e) => setNip(e.target.value)} />
                    </td>
                </tr>
                <tr>
                    <td>PASSWORD</td>
                    <td>
                        <input type="text" onChange={(e) => setPassword(e.target.value)}/>
                    </td>
                </tr>
                <tr>
                    <td colSpan="2">
                        <center>
                            <button className="button-primary" type="button"
                            onClick={() => handleLoginGuru()}>LOGIN</button>
                        </center>
                    </td>
                </tr>
            </table>
           </div>

           <div style={{ display: formAdminVisible ? "block" : "none" }}>
    <center>
       <b>LOGIN ADMIN</b>
       <p>{error}</p>
    </center>
   <table>
       <tr>
           <td>KODE ADMIN</td>
           <td>
               <input type="text" onChange={(e) => setIdAdmin(e.target.value)} />
           </td>
       </tr>
       <tr>
           <td>PASSWORD</td>
           <td>
               <input type="text" onChange={(e) => setPassword(e.target.value)} />
           </td>
       </tr>
       <tr>
           <td colSpan="2">
               <center>
                   <button className="button-primary" type="button"
                    onClick={() => handleLoginAdmin()}>LOGIN</button>
               </center>
           </td>
       </tr>
   </table>
  </div>
           </div>
  <div className="kanan">
    <center>
        <h1>
        <br />
            SELAMAT DATANG DI WEB PENILAIAN SMKN 1 CIBINONG
        <br />
        </h1>
    </center>
  </div>

  <div className="kiri-bawah">
    <center>
        <p className="mar">Gallery</p>
        <div className="gallery">
            <img src="/gambar/g2.jpg"  />
            <div className="deskripsi">SMK BISA</div>
        </div>
    </center>
  </div>
  <div className="footer">
            <b>
                 <p className="mar">2023 - UJIKOM & LSP</p>
            </b>
        </div> 
</>
    );
}

