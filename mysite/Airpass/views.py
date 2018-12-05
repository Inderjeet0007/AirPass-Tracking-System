from django.contrib.auth import authenticate, logout, login
from django.contrib.auth.decorators import login_required
from django.shortcuts import render,  get_object_or_404
from django.urls import reverse
from django.shortcuts import HttpResponseRedirect
from .models import readers
from django.contrib import messages

# Create your views here.
@login_required(login_url='/')
def home(request):
    context={}
    return render(request, "dashboard.html", context)

@login_required(login_url='/')
def contact(request):
    context = {}
    return render(request, "contact.html", context)

def user_login(request):
    context = {}
    if request.method == "POST":
        username = request.POST['username']
        password = request.POST['password']
        user = authenticate(request, username=username, password=password)
        if user:
            login(request, user)
            return HttpResponseRedirect(reverse('home'))
        else:
            context["error"] = "Please provide legitimate credentials !!"
            return render(request, "login.html", context)
    else:
        return render(request, "login.html", context)


def user_logout(request):
    if request.method == "POST":
        logout(request)
        return HttpResponseRedirect(reverse('user_login'))