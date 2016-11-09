<?php

namespace User;

/**
 * example entity
 * @Entity @Table(name="users")
 * */
class User {

    /** @Id @Column(type="integer") @GeneratedValue * */
    protected $id;

    /** @Column(type="string") * */
    protected $username;

    /** @Column(type="string") * */
    protected $pass;
    
    /** @Column(type="integer", nullable=true ) * */
    protected $reseting_token;
    
    /** @Column(type="integer", nullable=false) * */
    protected $enabled = 1;

    /** @Column(type="array") * */
    protected $roles = [];

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPass() {
        return $this->pass;
    }

    public function setPass($pass) {
        $this->pass = $pass;
    }
    public function getEnabled() {
        return $this->enabled;
    }

    public function setEnabled($en) {
        $this->enabled = $en;
    }
    public function getResettingToken() {
        return $this->reseting_token;
    }

    public function setResettingToken($reseting_token) {
        $this->reseting_token = $reseting_token;
    }

    public function getRoles() {
        return $this->roles;
    }

    public function setRoles($roles) {
        $this->roles = $roles;
    }

}