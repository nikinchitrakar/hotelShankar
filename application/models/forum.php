<?php

class Forum extends CI_Model
{
    const DB_TABLE1='forum_question';
    const DB_TABLE2='forum_answer';

    function getTopic($num=20,$start=0)
    {
        $this->db->select()->from($this::DB_TABLE1)->order_by('datetime','desc')->limit($num,$start);
        $query=$this->db->get();
        return $query->result_array();
    }
    function getTopicCount()
    {
        $this->db->select()->from($this::DB_TABLE1);
        $query=$this->db->get();
        return $query->num_rows();
    }

    function insertTopic($topic,$detail,$name,$email)
    {

        $data=array(
                        "topic"=>$topic,
                        "detail"=>$detail,
                        "name"=>$name,
                        "email"=>$email,
                        "view"=>0,
                        "reply"=>0
                    );
        $this->db->set('datetime', now(), FALSE);
        $result=$this->db->insert($this::DB_TABLE1,$data);

        return $result;
    }

    public function incrementViews($topicId)
    {
        $this->db->where('id', $topicId);
        $this->db->set('view', 'view+1', FALSE);
        $this->db->update($this::DB_TABLE1);
    }

    public function incrementReplies($topicId)
    {
        $this->db->where('id', $topicId);
        $this->db->set('reply', 'reply+1', FALSE);
        $this->db->update($this::DB_TABLE1);
    }
    function insertReply($topicId,$a_name,$a_email,$a_answer)
    {
        $temp=$this->getReplyCount($topicId);
        if($temp>0)
        {
            $a_id=$temp+1;
        }
        else
        {
            $a_id=1;
        }
        $data=array(
                        "question_id"=>$topicId,
                        "a_id"=>$a_id,
                        "a_name"=>$a_name,
                        "a_email"=>$a_email,
                        "a_answer"=>$a_answer
                    );
        $this->db->set('a_datetime', now(), FALSE);
        $result=$this->db->insert($this::DB_TABLE2,$data);

        $this->incrementReplies($topicId);

        return $result;
    }

    function readTopic($topicId)
    {
        $this->db->select()->from($this::DB_TABLE1)->where('id',$topicId);
        $query=$this->db->get();
        return $query->first_row("array");
    }

    function getReply($topicId,$num=20,$start=0)
    {
        $this->db->select()->from($this::DB_TABLE2)->where('question_id',$topicId)->order_by('a_datetime','desc')->limit($num,$start);
        $query=$this->db->get();
        return $query->result_array();
    }
    function getReplyCount($topicId)
    {
        $this->db->select()->from($this::DB_TABLE2)->where('question_id',$topicId);
        $query=$this->db->get();
        return $query->num_rows();
    }

    function deleteTopic($topicId)
    {
        $this->db->where('question_id',$topicId)->delete($this::DB_TABLE2);
        $this->db->where('question_id',$topicId)->delete($this::DB_TABLE1);
    }


}